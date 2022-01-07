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
        User::create([
            'name' => 'Tihasah Rafa',
            'email' => 'admin@mail.com',
            'user_type' => 'admin',
            'password' => bcrypt('password')
        ]);
    }
}
