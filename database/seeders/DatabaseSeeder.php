<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@shouts.dev',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@shouts.dev',
            'password' => bcrypt('12345678'),
        ]);
    }
}
