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
        Schema::create('test_paper_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_paper_id')->constrained('test_papers')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->float('total_score')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 => pending , 1 => finished');
            $table->tinyInteger('type')->default(1)->comment('1 => normal, 2 => objection');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_paper_results');
    }
};
