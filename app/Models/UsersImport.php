<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new User([
            'fullname' => $row['fullname'],
            'email' => $row['email'],
            'nik' => $row['nik'],
            'submited' => 0,
            'password' => Hash::make($row['password']),
            'role' => 'User'
        ]);
    }
}
