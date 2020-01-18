<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\UserModel;
use Faker\Generator as Faker;

$factory->define(UserModel::class, function (Faker $faker) {
    return [
        'login' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt($faker->password)
    ];
});
