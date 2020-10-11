<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
            'display_name' => 'Super Admin'
        ]);

        DB::table('roles')->insert([
            'name' => 'Customer',
            'slug' => 'customer',
            'display_name' => 'Site Customer'
        ]);
    }
}
