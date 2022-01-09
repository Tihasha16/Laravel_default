<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        User::create([
            'name' => 'Tihasah Rafa',
            'email' => 'admin@mail.com',
            'is_admin' => true,
            'password' => bcrypt('password')
        ]);

        // User
        User::create([
            'name' => 'Developer',
            'email' => 'developer@mail.com',
            'password' => bcrypt('password')
        ]);
    }
}
