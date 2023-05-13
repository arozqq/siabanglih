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
            [
                'fullname'	=> 'Rika',
                'nik' => '3674062010970040',
                'email'	=> 'rika@gmail.com',
                'password'	=> bcrypt('ajibganteng'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'Neneng',
                'nik' => '3674062010970050',
                'email'	=> 'neneng@gmail.com',
                'password'	=> bcrypt('ajibganteng'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'Deni',
                'nik' => '3674062010970060',
                'email'	=> 'deni@gmail.com',
                'password'	=> bcrypt('ajibganteng'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'Awe',
                'nik' => '3674062010970070',
                'email'	=> 'awe@gmail.com',
                'password'	=> bcrypt('ajibganteng'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'bobi',
                'nik' => '3674062010970080',
                'email'	=> 'bobi@gmail.com',
                'password'	=> bcrypt('ajibganteng'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname'	=> 'rudi',
                'nik' => '3674062010970090',
                'email'	=> 'rudi@gmail.com',
                'password'	=> bcrypt('ajibganteng'),
                'role' => 'User',
                'submited' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
         
    ]);
    }
}
