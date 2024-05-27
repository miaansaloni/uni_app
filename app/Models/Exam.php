<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
