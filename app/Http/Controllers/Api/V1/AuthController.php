<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\BaseController;
use App\Models\Authorization;
use App\Transformers\AuthorizationTransformer;
use Dingo\Api\Http\Request;

/**
 * Created by PhpStorm.
 * User: summer.zuo
 * Date: 2018/9/27
 * Time: 16:33
 */
class AuthController extends BaseController
{
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->errorBadRequest($validator);
        }

        $credentials = $request->only('email', 'password');

        // 验证失败返回401
        if (! $token = \Auth::attempt($credentials)) {
            $this->response->errorUnauthorized(trans('auth.incorrect'));
        }

        $authorization = new Authorization($token);

        return $this->response->item($authorization, new AuthorizationTransformer())
            ->setStatusCode(201);
    }
}