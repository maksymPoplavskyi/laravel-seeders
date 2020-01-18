<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\UserModel::class, 25)->create()->each(function ($user) {
            $user->posts()->saveMany(factory(App\Model\PostModel::class, 5)->make());
        });
    }
}
