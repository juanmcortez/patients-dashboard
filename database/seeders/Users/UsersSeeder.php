<?php

namespace Database\Seeders\Users;

use App\Models\Users\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->create([
                'username' => 'superadministrator',
                'name' => 'Super Admin',
                'email' => 'administrator@patients-dashboard.test',
                'password' => Hash::make('se-J7$c>@orR,Ab7*E%3'),
            ]);
    }
}
