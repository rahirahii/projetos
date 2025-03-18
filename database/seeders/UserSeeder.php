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
        User::create([
            'name'=>'Admin',
            'email'=> 'admin@senai.com',
            'password'=>Hash::make('123456'),
            'role'=>'admin'
        ]);

        User::create([
            'name'=>'Professor',
            'email'=> 'prof@senai.com',
            'password'=>Hash::make('123456'),
            'role'=>'professor'
        ]);

        User::create([
            'name'=>'Aluno',
            'email'=> 'aluno@senai.com',
            'password'=>Hash::make('123456'),
            'role'=>'aluno'
        ]);
    }
}
