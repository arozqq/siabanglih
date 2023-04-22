<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
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
                'fullname'	=> 'Ajib Roziq',
                'nik' => '3674062010970010',
                'email'	=> 'ajibroziq21@gmail.com',
                'password'	=> bcrypt('ajibganteng'),
                'role' => 'Admin',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'Syifa Nurhalimah',
                'nik' => '3674062010970020',
                'email'	=> 'syifanurhalimah@gmail.com',
                'password'	=> bcrypt('ajibganteng'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'Arka Alfarizi',
                'nik' => '3674062010970030',
                'email'	=> 'arka@gmail.com',
                'password'	=> bcrypt('ajibganteng'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
         
    ]);
    }
}