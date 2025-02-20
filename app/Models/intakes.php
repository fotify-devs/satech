<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class intakes extends Model
{
    protected $fillable = [
        'course_id',
        'name',
        'start_date',
        'end_date',
        'capacity',
        'is_open',
        'description'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_open' => 'boolean',
    ];

    /**
     * Get the course that owns the intake.
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}