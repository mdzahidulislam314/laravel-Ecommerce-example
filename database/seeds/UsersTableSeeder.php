<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
//            'role_id' => 1,
            'name' => 'Admin',
            'email'=>'admin@mail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
