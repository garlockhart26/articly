<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = User::create([
            'name' => 'Administrator Articly',
            'image' => 'default.png',
            'email' => 'administrator@articly.com',
            'email_verified_at' => now(),
            'password' => Hash::make('1234567890'),
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $administrator->assignRole('Administrator');

        $write = User::create([
            'name' => 'Garlockhart',
            'image' => 'default.png',
            'email' => 'garlockhart@articly.com',
            'email_verified_at' => now(),
            'password' => Hash::make('1234567890'),
            'remember_token' => Str::random(10),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $write->assignRole('Writer');
    }
}
