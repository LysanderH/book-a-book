<?php

namespace Database\Seeders;

use App\Models\Bac;
use App\Models\Category;
use App\Models\Role;
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
        // Array with 2 default users
        $users = [
            [
                'firstname' => 'Lysander',
                'lastname' => 'Hans',
                'email' => 'lysander.hans@hotmail.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'last_login' => now()
            ],
            [
                'firstname' => 'Xavier',
                'lastname' => 'Spirlet',
                'email' => 'lysander.hans@student.hepl.be',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'last_login' => now(),
            ],
        ];

        foreach ($users as $user) {
            $currentUser = User::create([
                'firstname' => $user['firstname'],
                'lastname' => $user['lastname'],
                'email' => $user['email'],
                'password' => $user['password'],
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'last_login' => now(),
            ]);
            $currentUser->roles()->attach(Role::where('name', $user['role'])->first()->id);
            $currentUser->addMediaFromUrl('https://i.pravatar.cc/150')->toMediaCollection('users');
        }

        // Add some random users to the default users array
        $randomUsers = User::factory(98)->create();

        foreach ($randomUsers as $randomUser) {
            $randomUser->roles()->attach(Role::where('name', 'user')->first()->id);
            $randomUser->addMediaFromUrl('https://i.pravatar.cc/150')->toMediaCollection('users');
        }
    }
}
