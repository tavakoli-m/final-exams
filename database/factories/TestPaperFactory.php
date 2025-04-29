<?php

namespace Database\Factories;

use App\Models\Test;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestPaper>
 */
class TestPaperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => fake()->numberBetween(1111111111,9999999999),
            'test_id' => Test::all()->random()->id,
            'user_id' => User::where('role',2)->get()->random()->id,
            'url' => 'https://www.google.com/'
        ];
    }
}
