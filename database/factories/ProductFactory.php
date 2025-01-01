<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 4),
            'name' => $this->faker->word(),
            'slug' => str::slug($this->faker->word()),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 5, 100),
            'stock' => $this->faker->numberBetween(1, 100),
            'image_url' => $this->faker->imageUrl(),
        ];
    }
}
