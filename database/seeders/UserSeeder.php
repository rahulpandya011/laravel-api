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
        $user = new User();
        $user->first_name = 'Rahul';
        $user->last_name = 'Pandya';
        $user->email = 'rahul@mailinator.com';
        $user->password = Hash::make(123456);
        $user->save();
    }
}
