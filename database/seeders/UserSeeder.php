<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use function Sodium\add;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Array with 2 default users
        $users = [
            [
                'first-name' => 'Lysander',
                'last-name' => 'Hans',
                'email' => 'lysander.hans@hotmail.com',
                'password' => Hash::make('password'),
                'role' => 'user'
            ],
            [
                'first-name' => 'Xavier',
                'last-name' => 'Spirlet',
                'email' => 'lysander.hans@student.hepl.be',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ],
        ];


        foreach ($users as $user) {
            $currentUser = User::create([
                'first-name' => $user['first-name'],
                'last-name' => $user['last-name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]);
            $currentUser->role()->attach(Role::where('name', $user['role'])->first()->id);

            //        Add some random users to the default users array
            $randomUsers = User::factory(98)->create();

            foreach ($randomUsers as $randomUser) {
                $randomUser->role()->attach(Role::where('name', 'user')->first()->id);
            }
        }
    }
}
