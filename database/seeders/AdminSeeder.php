<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
        [
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin1234'),
            'is_admin' => true
        ],
        [
            'name' => 'Demo',
            'email' => 'demo@example.com',
            'password' => Hash::make('demo1234'),
            'is_admin' => true
        ]
    ];

    foreach ($admins as $admin) {
        User::create($admin);
    }
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@example.com',
        //     'password' => Hash::make('admin123'),
        //     'is_admin' => true
        // ]);
        
        // User::create([
        //     'name' => 'Demo',
        //     'email' => 'demo@example.com',
        //     'password' => Hash::make('demo1234'),
        //     'is_admin' => true
        // ]);
        
    }
}
