<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepartmentResources extends Model
{
    protected $fillable = [
        'department_id',
        'file_path',
        'file_type',
        'original_name'
    ];

    /**
     * Get the department that owns the resource.
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}