<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('admin'),
                'phone' => '085282205728',
                'role' => 'admin'
            ],
            [
                'name' => 'rayhan yuda lesmana',
                'email' => 'rayhanyuda13@gmail.com',
                'password' => Hash::make('123'),
                'phone' => '085282205728',
                'role' => 'customer'
            ],
            [
                'name' => 'scheduler',
                'email' => 'scheduler@gmail.com',
                'password' => Hash::make('123'),
                'phone' => '085282205728',
                'role' => 'scheduler'
            ],
            [
                'name' => 'repairman',
                'email' => 'repairman@gmail.com',
                'password' => Hash::make('123'),
                'phone' => '085282205728',
                'role' => 'repairman'
            ],
            [
                'name' => 'receiver',
                'email' => 'receiver@gmail.com',
                'password' => Hash::make('123'),
                'phone' => '085282205728',
                'role' => 'receiver'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        };
    }
}
