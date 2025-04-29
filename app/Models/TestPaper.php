<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPaper extends Model
{
    /** @use HasFactory<\Database\Factories\TestPaperFactory> */
    use HasFactory;

    protected $fillable = [
        'client_id',
        'test_id',
        'user_id',
        'url',
        'current_score',
        'check_count'
    ];
}
