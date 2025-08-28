<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->words(2, true),
            'price'=> $this->faker->randomFloat(2,40,100),
            'image' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/category-page-04-image-card-0'.random_int(1,8).'.jpg',
            'description' => $this->faker->paragraph(),
        ];
    }
}
