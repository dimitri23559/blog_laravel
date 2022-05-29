<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1,2),
            'user_id' => mt_rand(1,2),
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->unique()->slug(3),
            'excerpt' => $this->faker->sentence(10),
            'body' => $this->faker->paragraph(mt_rand(5, 10))
            
        ];
    }
}
