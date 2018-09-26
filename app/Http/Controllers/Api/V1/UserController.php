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
use App\Service\UserService;
use Dingo\Api\Http\Request;


class UserController extends BaseController
{

    /**
     * user list
     *
     */
    public function index()
    {
        return User::all();
    }

    /**
     * add a user
     *
     * @param Request $request
     */
    public function add(Request $request)
    {
        UserService::addUser($request->all());
    }
}