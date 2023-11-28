<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'ADMIN',
            'USER',
            'EDITOR',
            'BENDAHARA',
            'TEACHER',
            'KEPSEK',
            'OPERATOR',
        ];

        $users = [
            [
                'name' => 'ugun',
                'email' => 'ugun1@gmail.com',
                'password' => Hash::make('password'),
                'roles' => 'ADMIN',
                'username' => 'ugun1',
            ],
            [
                'name' => 'budi',
                'email' => 'budi1@gmail.com',
                'password' => Hash::make('password'),
                'roles' => 'USER',
                'username' => 'budi1',
            ],
            [
                'name' => 'cici',
                'email' => 'cici1@gmail.com',
                'password' => Hash::make('password'),
                'roles' => 'EDITOR',
                'username' => 'cici1',
            ],
            [
                'name' => 'dani',
                'email' => 'dani1@gmail.com',
                'password' => Hash::make('password'),
                'roles' => 'BENDAHARA',
                'username' => 'dani1',
            ],
            [
                'name' => 'andi',
                'email' => 'andi1@gmail.com',
                'password' => Hash::make('password'),
                'roles' => 'TEACHER',
                'username' => 'andi1',
            ],
            [
                'name' => 'joko',
                'email' => 'joko1@gmail.com',
                'password' => Hash::make('password'),
                'roles' => 'KEPSEK',
                'username' => 'joko1',
            ],
            [
                'name' => 'wati',
                'email' => 'wati1@gmail.com',
                'password' => Hash::make('password'),
                'roles' => 'OPERATOR',
                'username' => 'wati1',
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
