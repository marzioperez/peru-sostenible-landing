<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Admin::create([
            'name' => "Marzio Perez",
            'email' => "marzioperez@gmail.com",
            'password' => "47804233"
        ]);

        Admin::create([
            'name' => "Alexis Sanchez",
            'email' => "alexis_sanchez@gmail.com",
            'password' => "123456"
        ]);
    }
}
