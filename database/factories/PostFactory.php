<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => fake()->sentence,
            'photo' => fake()->image(public_path('storage/images'), 640, 480, null, false),
            'category_id' => fake()->numberBetween(1,3),
            'user_id' => 1
        ];
    }
}
