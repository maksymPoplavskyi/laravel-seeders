<?php

namespace App\Http\Controllers;

use App\Model\PostModel;
use App\Model\UserModel;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index() {

//        $posts = UserModel::find(1)->posts;
//
//        dd($posts);

        $user = PostModel::find(1);

        dd($user->user->login);
    }
}
