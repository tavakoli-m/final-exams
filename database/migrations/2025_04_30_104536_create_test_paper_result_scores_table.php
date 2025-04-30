<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('test_paper_result_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_paper_result_id')->constrained('test_paper_results')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('test_question_id')->constrained('test_questions')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('test_question_score_id')->constrained('test_question_scores')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_paper_result_scores');
    }
};
