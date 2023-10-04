<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = new User();
        $data->name = 'Admin';
        $data->email = 'admin@mail.com';
        $data->password = Hash::make('admin123');
        $data->role = 3; // 1 = user, 2 = employer, 3 = admin
        $data->save();
        $data = new User();
        $data->name = 'Employeer';
        $data->email = 'employeer@mail.com';
        $data->password = Hash::make('admin123');
        $data->role = 2; // 1 = user, 2 = employer, 3 = admin
        $data->save();
        $data = new User();
        $data->name = 'User';
        $data->email = 'user@mail.com';
        $data->password = Hash::make('admin123');
        $data->role = 1; // 1 = user, 2 = employer, 3 = admin
        $data->save();
    }
}