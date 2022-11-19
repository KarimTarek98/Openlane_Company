<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@openlane.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'username' => 'Super Admin',
            'profile_photo' => '202209201844-karim1.jpg',
            'is_admin' => 1
        ]);

        $user->assignRole('Super Admin');
    }
}
