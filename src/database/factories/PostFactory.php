<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\PostModel;
use App\Model\UserModel;
use Faker\Generator as Faker;

$factory->define(PostModel::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'text' => $faker->text,
        'user_id' => function () {
            return \factory(UserModel::class)->make()->id;
        }
    ];
});
