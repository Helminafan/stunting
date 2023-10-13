<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $admin = User::create([
            'address' =>'jalan antah berantah',
            'email' => 'admin@gmail.com',
            'telp' => '123456789',
            'password' => bcrypt('admin123'),
        ]);
        $admin->assignRole('admin');

       $user = User::create([
            'address' =>'jalan antah',
            'email' => 'user@gmail.com',
            'telp' => '12345678910',
            'password' => bcrypt('user123'),
        ]);
        $user->assignRole('user');
    }
}
