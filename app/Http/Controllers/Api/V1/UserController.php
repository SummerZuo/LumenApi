<?php
/**
 * Created by PhpStorm.
 * User: summer.zuo
 * Date: 2018/9/26
 * Time: 16:19
 */

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Transformers\UserTransformer;
use Dingo\Api\Http\Request;


class UserController extends BaseController
{

    /**
     * user list
     *
     */
    public function index()
    {
        $users = User::all();
        return $this->response->collection($users, new UserTransformer());
    }

    /**
     * add a user
     *
     * @param Request $request
     */
    public function add(Request $request)
    {
        $input = $request->input();
        $attritubes = [
            'email' => $input['email'],
            'name' => $input['name'],
            'password' => app('hash')->make($input['password'])
        ];

        $model = new User();
        $model->fill($attritubes)->save();

        return $this->response->item($model, new UserTransformer())
                    ->setStatusCode(201);
    }
}