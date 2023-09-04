<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'admin@test.com',
                'phone' => '123456789',

                'password' => Hash::make(1234)
            ],
            [
                'id' => 2,
                'first_name' => 'Project',
                'last_name' => 'Manager',
                'email' => 'pm@test.com',
                'phone' => '123456789',

                'password' => Hash::make(1234)
            ],
            [
                'id' => 3,
                'first_name' => 'Sales',
                'last_name' => 'Manager',
                'email' => 'sm@test.com',
                'phone' => '123456789',

                'password' => Hash::make(1234)
            ],
            [
                'id' => 4,
                'first_name' => 'HR',
                'last_name' => 'HR',
                'email' => 'hr@test.com',
                'phone' => '123456789',

                'password' => Hash::make(1234)
            ],
        ]);
    }
}
