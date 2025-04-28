<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TestQuestion extends Model
{
    /** @use HasFactory<\Database\Factories\TestQuestionFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'test_id',
    ];

    public function test() : BelongsTo
    {
        return $this->belongsTo(Test::class);
    }
}
