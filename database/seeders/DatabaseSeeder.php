<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Speaker;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void {
        Speaker::factory(10)->create();
        User::factory(20)->create();
        $this->call(AdminSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(AlliesSeeder::class);
    }
}
