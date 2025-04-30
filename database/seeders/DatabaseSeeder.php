<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TestQuestionScore;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(TestSeeder::class);
        $this->call(TestQuestionSeeder::class);
        $this->call(TestQuestionScore::class);
        $this->call(TestPaperSeeder::class);
        $this->call(TestPaperResultSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
