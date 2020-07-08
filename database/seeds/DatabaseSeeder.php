<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        App\User::create([
            'name' => 'Alejandro Cataño H',
            'email' => 'a@admin.com',
            'password' => bcrypt('123456')
        ]);

        factory(App\Post::class, 24)->create();
    }
}
