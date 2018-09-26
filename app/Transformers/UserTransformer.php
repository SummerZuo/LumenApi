<?php
/**
 * Created by PhpStorm.
 * User: Summer
 * Date: 2018/9/26
 * Time: 21:36
 */

namespace App\Transformers;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
            'avatar' => $user->avatar,
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at,
        ];
    }

}