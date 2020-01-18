<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $connection = 'mysql';
    protected $table = 'users';

    public function posts()
    {
        return $this->hasMany('App\Model\PostModel', 'user_id');
    }
}
