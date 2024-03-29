<?php
namespace Database\Seeders;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'nisnipd'        => '1234/1234567890',
                'password'       => '$2y$10$f4aniHIjl5MKap/sLhdyquQIwVzf1uXFleyhjLr1.BNJG7OhReU9C',
                'remember_token' => null,
                'approved'       => 1,
            ],
        ];

        User::insert($users);
    }
}
