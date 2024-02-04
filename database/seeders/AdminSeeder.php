<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Role::create(['name' => 'admin']);

        $user = User::create([
            'name' => 'First Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('supersecret'),
        ]);

        $user->assignRole('admin');
    }
}
