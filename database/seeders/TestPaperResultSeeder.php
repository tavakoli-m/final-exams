<?php

namespace Database\Seeders;

use App\Models\TestPaperResult;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestPaperResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestPaperResult::factory(50)->create();
    }
}
