<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'content' => $this->faker->paragraph(),
            'user_id' => rand(1, User::count()),
            'image' => 'default_picture'.rand(1,5).'jpg',
            'tags' => $this->faker->words(3,true),
        ];
    }
}
