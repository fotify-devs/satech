<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'bio',
        'expertise',
        'education',
        'contact_email',
    ];

    protected static function boot()
    {
        parent::boot();

        // Generate slug before saving
        static::creating(function ($profile) {
            if (empty($profile->slug)) {
                $profile->slug = Str::slug($profile->title . '-' . Str::random(6));
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Get profile by slug
    public function scopeBySlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}
