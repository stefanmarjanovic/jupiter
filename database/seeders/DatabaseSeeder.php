<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Auth;
use App\Models\Api;
use App\Models\Profile;
use App\Models\Ftp;
use App\Models\Database;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::factory(2)->unverified()->create();
        Database::factory(10)->create();
        Ftp::factory(10)->create();
        Api::factory(10)->create();
        Auth::factory(10)->create();
        Profile::factory(10)->create();
        
        /** 
         * User::factory()->create([
         * 'name' => 'Test User',
         * 'email' => 'test@example.com',
         * ]);
        */
    }
}
