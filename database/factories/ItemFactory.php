<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Collection;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();

        return [
            'title' => $title,
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 0, 100),
            'royalties' => fake()->randomFloat(2, 0, 100),
            'method' => fake()->word(),
            'size' => fake()->randomNumber(4),
            'collection_id' => Collection::factory(),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => Str::slug($title),
        ];
    }
}
