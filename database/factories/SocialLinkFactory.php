<?php

namespace Database\Factories;

use App\Models\SocialLink;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SocialLink>
 */
class SocialLinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'label' => fake()->word(),
            'url' => fake()->url(),
            'icon_class' => 'fas fa-link',
            'display_order' => fake()->numberBetween(0, 10),
            'is_published' => true,
        ];
    }
}
