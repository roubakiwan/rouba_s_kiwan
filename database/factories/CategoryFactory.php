<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [ 'name'=>fake()->name(),
                 'quality'=>fake()->text(),
                 'source'=>fake()->text(),
                 'image'=>fake()->imageUrl('min_width=2160','min_height=3840','max:2.70MB')
        ];
    }
}
