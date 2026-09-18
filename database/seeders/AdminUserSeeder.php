<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@solecraft.test'],
            [
                'name' => 'Admin SOLECRAFT',
                'password' => Hash::make('Owner310324@'),
                'email_verified_at' => now(),
            ]
        );
    }
}
