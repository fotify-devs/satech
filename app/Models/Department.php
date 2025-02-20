<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'icon',
        'embedded_link'
    ];

    /**
     * Get the courses associated with the department.
     */
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    /**
     * Get the resources associated with the department.
     */
    public function resources(): HasMany
    {
        return $this->hasMany(DepartmentResource::class);
    }

    /**
     * Get the images associated with the department.
     */
    public function images(): HasMany
    {
        return $this->hasMany(DepartmentImage::class);
    }
}