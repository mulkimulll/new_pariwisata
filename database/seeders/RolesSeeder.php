<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'user', 
        ]);
        DB::table('roles')->insert([
            'name' => 'admin_jelajah', 
        ]);
        DB::table('roles')->insert([
            'name' => 'admin_kuliner', 
        ]);
        DB::table('roles')->insert([
            'name' => 'admin_hiburan', 
        ]);
        DB::table('roles')->insert([
            'name' => 'admin_belanja', 
        ]);

        DB::table('roles')->insert([
            'name' => 'admin', 
        ]);

    }
}
