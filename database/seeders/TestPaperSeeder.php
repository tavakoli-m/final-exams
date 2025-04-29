<?php

namespace Database\Seeders;

use App\Models\TestPaper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestPaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestPaper::factory(500)->create();
    }
}
