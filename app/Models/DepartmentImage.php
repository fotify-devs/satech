<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DepartmentImage extends Model
{
    protected $fillable = [
        'department_id',
        'image_path',
        'image_type',
        'original_name'
    ];

    /**
     * Get the department that owns the image.
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}