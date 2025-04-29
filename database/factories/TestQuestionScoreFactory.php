<?php

namespace Database\Factories;

use App\Models\TestQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestQuestionScore>
 */
class TestQuestionScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $scores = [0.25,0.5,0.75,1];
        return [
            'score' => $scores[fake()->numberBetween(0,3)],
            'test_question_id' => TestQuestion::all()->random()->id
        ];
    }
}
