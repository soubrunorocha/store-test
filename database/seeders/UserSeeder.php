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
            'name' => 'Master Admin',
            'email' => 'admin@admin.com',
            'password' => 'masterpassword', // password
        ]);

        User::factory()
            ->count(10)
            ->create();
    }
}
