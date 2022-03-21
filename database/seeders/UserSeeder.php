<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'fname' => 'Registration',
            'sname' => 'Token',
            'email' => 'token@gmail.com',
            'token' => Hash::make('54321'),
            'password' => Hash::make('12345')

        ]);
    }
}
