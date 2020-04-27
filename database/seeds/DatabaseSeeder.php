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
        factory(App\User::class, 10)
            ->create()
            ->each(function ($user) {
                $posts = factory(App\Models\Post::class, 10)->make();
                $posts->each(function ($post) use ($user) {
                    $user->posts()->save($post);
                });
            });
    }
}
