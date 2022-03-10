<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence;
        $slug = Str::slug($name, '-');
        return [
            'name' => $name,
            'slug' => $slug,
            'image' => $this->faker->imageUrl(
                640,
                480,
                'products',
                true
            ),
            'price' => $this->faker->numberBetween($min = 500, $max = 8000),
        ];
    }
}
