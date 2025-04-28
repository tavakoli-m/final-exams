<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Test extends Model
{
    /** @use HasFactory<\Database\Factories\TestFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'upload_start_at',
        'upload_end_at',
        'objection_status',
        'answer',
    ];

    public function questions() : HasMany
    {
        return $this->hasMany(TestQuestion::class);
    }
}
