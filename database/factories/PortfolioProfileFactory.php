<?php

namespace Database\Factories;

use App\Models\PortfolioProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PortfolioProfile>
 */
class PortfolioProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'headline' => fake()->jobTitle(),
            'intro' => fake()->paragraph(),
            'about' => fake()->paragraph(),
            'profile_image_path' => null,
            'cv_path' => null,
        ];
    }
}
