<?php

namespace Database\Seeders;

use App\Models\TestQuestionScore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestQuestionScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestQuestionScore::factory(50)->create();
    }
}
