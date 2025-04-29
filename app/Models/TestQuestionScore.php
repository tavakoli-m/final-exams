<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestQuestionScore extends Model
{
    /** @use HasFactory<\Database\Factories\TestQuestionScoreFactory> */
    use HasFactory;

    protected $fillable = [
        'score',
        'test_question_id'
    ];

    public function testQuestion() : BelongsTo
    {
        return $this->belongsTo(TestQuestion::class);
    }
}
