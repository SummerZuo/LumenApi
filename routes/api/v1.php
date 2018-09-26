<?php
/**
 * Created by PhpStorm.
 * User: summer.zuo
 * Date: 2018/9/26
 * Time: 15:07
 */
$api = app('Dingo\Api\Routing\Router');

//$request = app('Dingo\Api\Http\Request');
//dd($request->version());

$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Api\V1'
],function ($api) {
    // user list
    $api->get('users', [
        'as' => 'user.index',
        'uses' => 'UserController@index'
    ]);

    // add user
    $api->post('user', [
        'as' => 'user.add',
        'uses' => 'UserController@add'
    ]);
});