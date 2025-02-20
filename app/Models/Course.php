<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'department_id',
        'course_code',
        'course_name',
        'description',
        'duration',
        'fee'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'fee' => 'decimal:2',
    ];

    /**
     * Get the department that owns the course.
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    // Update to app/Models/Course.php - Add this relationship
    public function intakes(): HasMany
   {
    return $this->hasMany(Intake::class);
   }
}