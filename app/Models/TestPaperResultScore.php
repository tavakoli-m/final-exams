<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPaperResultScore extends Model
{
    /** @use HasFactory<\Database\Factories\TestPaperResultScoreFactory> */
    use HasFactory;

    protected $fillable = [
        'test_paper_result_id',
        'test_question_id',
        'test_question_score_id'
    ];
}
