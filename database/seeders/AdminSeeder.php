<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "admin",
            'lastname' => "admin",
            'address' => "admin",
            'city' => "admin",
            'movil' => 675849375,
            'dni' => "24356789G",
            'email' => "admin@gmail.com",
            'password' => bcrypt('12345678'),
            'role_id' => 1,
        ]);

    }
}
