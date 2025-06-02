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
            // ランダムなタイトル
            'title' => $this->faker->sentence(),
            // ランダムな本文
            'content' => $this->faker->paragraph(),
            'user_id' => 7,
        ];
    }
}
