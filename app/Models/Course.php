<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function exams(): HasMany
    {
        return $this->hasMany(Exam::class);
    }
}
