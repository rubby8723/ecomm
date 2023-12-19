<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

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
        'first_name' => 'krishna',
        'last_name' => 'kanhiya',
        // 'user_type' => 1,
        'role_id' => 1,
        'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        'email' => 'krishna@yopmail.com',
        'password' => bcrypt('123456'),
        ]);
}
}
