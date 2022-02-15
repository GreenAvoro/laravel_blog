<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
            'title'     => $this->faker->sentence(),
            'excerpt'   => $this->faker->paragraph(3),
            'body'      => $this->faker->paragraph(20),
            'slug'      => $this->faker->slug(),
            'user_id'   => User::factory(),
            'category_id'=> Category::factory()
        ];
    }
}
