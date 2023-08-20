<?php

namespace Database\Seeders;

use App\Models\Allie;
use App\Models\AlliesCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $premium = AlliesCategory::create([
            'name' => 'Premium',
            'order' => 1
        ]);

        for ($i = 0; $i < 20; $i++) {
            Allie::create([
                'name' => fake()->company,
                'order' => $i + 1,
                'phone' => fake()->phoneNumber,
                'facebook_url' => fake()->url,
                'linkedin_url' => fake()->url,
                'twitter_url' => fake()->url,
                'instagram_url' => fake()->url,
                'email_url' => fake()->email,
                'whatsapp_url' => fake()->url,
                'biography' => fake()->paragraph,
                'allie_category_id' => $premium->id
            ]);
        }

        $oro = AlliesCategory::create([
            'name' => 'Oro',
            'order' => 2
        ]);

        for ($i = 0; $i < 20; $i++) {
            Allie::create([
                'name' => fake()->company,
                'order' => $i + 1,
                'phone' => fake()->phoneNumber,
                'facebook_url' => fake()->url,
                'linkedin_url' => fake()->url,
                'twitter_url' => fake()->url,
                'instagram_url' => fake()->url,
                'email_url' => fake()->email,
                'whatsapp_url' => fake()->url,
                'biography' => fake()->paragraph,
                'allie_category_id' => $oro->id
            ]);
        }

        $plata = AlliesCategory::create([
            'name' => 'Plata',
            'order' => 3
        ]);

        for ($i = 0; $i < 20; $i++) {
            Allie::create([
                'name' => fake()->company,
                'order' => $i + 1,
                'phone' => fake()->phoneNumber,
                'facebook_url' => fake()->url,
                'linkedin_url' => fake()->url,
                'twitter_url' => fake()->url,
                'instagram_url' => fake()->url,
                'email_url' => fake()->email,
                'whatsapp_url' => fake()->url,
                'biography' => fake()->paragraph,
                'allie_category_id' => $plata->id
            ]);
        }

        $medios = AlliesCategory::create([
            'name' => 'Medios',
            'order' => 3
        ]);

        for ($i = 0; $i < 20; $i++) {
            Allie::create([
                'name' => fake()->company,
                'order' => $i + 1,
                'phone' => fake()->phoneNumber,
                'facebook_url' => fake()->url,
                'linkedin_url' => fake()->url,
                'twitter_url' => fake()->url,
                'instagram_url' => fake()->url,
                'email_url' => fake()->email,
                'whatsapp_url' => fake()->url,
                'biography' => fake()->paragraph,
                'allie_category_id' => $medios->id
            ]);
        }

        $colaboradores = AlliesCategory::create([
            'name' => 'Colaboradores',
            'order' => 4
        ]);

        for ($i = 0; $i < 20; $i++) {
            Allie::create([
                'name' => fake()->company,
                'order' => $i + 1,
                'phone' => fake()->phoneNumber,
                'facebook_url' => fake()->url,
                'linkedin_url' => fake()->url,
                'twitter_url' => fake()->url,
                'instagram_url' => fake()->url,
                'email_url' => fake()->email,
                'whatsapp_url' => fake()->url,
                'biography' => fake()->paragraph,
                'allie_category_id' => $colaboradores->id
            ]);
        }
    }
}
