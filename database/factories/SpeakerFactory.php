<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Speaker>
 */
class SpeakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'position' => "Cargo",
            'biography' => $this->faker->paragraph,
            'web_url' => $this->faker->url,
            'facebook_url' => $this->faker->url,
            'linkedin_url' => $this->faker->url,
            'twitter_url' => $this->faker->url,
            'instagram_url' => $this->faker->url,
            'email_url' => $this->faker->email,
            'whatsapp_url' => $this->faker->phoneNumber
        ];
    }
}
