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
        $data->name = 'Raihan Permadi';
        $data->email = 'raihanp13@gmail.com';
        $data->password = Hash::make('raihanpermadi');
        $data->role = 3; // 1 = user, 2 = employer, 3 = admin
        $data->save();
        $data = new User();
        $data->name = 'Raihan Permadi';
        $data->email = 'raihanp15@gmail.com';
        $data->password = Hash::make('raihanpermadi');
        $data->role = 2; // 1 = user, 2 = employer, 3 = admin
        $data->save();
        $data = new User();
        $data->name = 'Raihan Permadi';
        $data->email = 'raihanp16@gmail.com';
        $data->password = Hash::make('raihanpermadi');
        $data->role = 1; // 1 = user, 2 = employer, 3 = admin
        $data->save();
    }
}
