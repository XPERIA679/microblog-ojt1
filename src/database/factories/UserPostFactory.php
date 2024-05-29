<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = UserPost::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id, 
            'content' => $this->faker->paragraph,
        ];
    }
}
