<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name'=>'Keya',
            'last_name'=>'Akter',
            'phone'=>01711223344,
            'gender'=>'female',
            'role'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345')
        ]);
    }
}
