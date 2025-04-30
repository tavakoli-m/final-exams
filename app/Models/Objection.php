<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objection extends Model
{
    /** @use HasFactory<\Database\Factories\ObjectionFactory> */
    use HasFactory;

    protected $fillable = [
        'paper_id',
        'description',
        'status'
    ];
}
