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
                'fullname'	=> 'Administrator',
                'username' => 'adminmuscab',
                'email'	=> 'ajibroziq21@gmail.com',
                'password'	=> bcrypt('adminMus4b123!*'),
                'role' => 'Admin',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'Syifa Nurhalimah',
                'username' => 'pamtim1',
                'email'	=> 'syifanurhalimah@gmail.com',
                'password'	=> bcrypt('muscab123'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'Arka Alfarizi',
                'username' => 'pamtim2',
                'email'	=> 'arka@gmail.com',
                'password'	=> bcrypt('muscab123'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'Rika',
                'username' => 'pamtim3',
                'email'	=> 'rika@gmail.com',
                'password'	=> bcrypt('muscab123'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'Neneng',
                'username' => 'pamtim4',
                'email'	=> 'neneng@gmail.com',
                'password'	=> bcrypt('muscab123'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'Deni',
                'username' => 'pamtim5',
                'email'	=> 'deni@gmail.com',
                'password'	=> bcrypt('muscab123'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'Awe',
                'username' => 'pamtim6',
                'email'	=> 'awe@gmail.com',
                'password'	=> bcrypt('muscab123'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'bobi',
                'username' => 'pamtim7',
                'email'	=> 'bobi@gmail.com',
                'password'	=> bcrypt('muscab123'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'rudi',
                'username' => 'pamtim8',
                'email'	=> 'rudi@gmail.com',
                'password'	=> bcrypt('muscab123'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
         
    ]);
    }
}
