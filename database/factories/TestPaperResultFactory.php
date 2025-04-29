<?php

namespace Database\Factories;

use App\Models\TestPaper;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestPaperResult>
 */
class TestPaperResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'test_paper_id' => TestPaper::all()->random()->id,
            'user_id' => User::where('role',3)->get()->random()->id,
            'total_score' => fake()->numberBetween(5,20),
            'status' => fake()->numberBetween(0,1),
            'type' => 1,
        ];
    }
}
