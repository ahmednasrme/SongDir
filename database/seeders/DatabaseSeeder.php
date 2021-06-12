<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Album;
use App\Models\Song;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Administrator",
            "email" => "admin@songdir.com",
            'email_verified_at' => now(),
            "password" => Hash::make('password'),
            "admin" => 1
        ]);

        User::create([
            "name" => "User",
            "email" => "user@songdir.com",
            'email_verified_at' => now(),
            "password" => Hash::make('password'),
            "admin" => 0
        ]);

        $this->call([
            AlbumSeeder::class
        ]);
    }
}
