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

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Generate unique slug before saving
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($profile) {
            if (empty($profile->slug)) {
                $profile->slug = Str::slug($profile->title);
            }
            
            $originalSlug = $profile->slug;
            $count = 1;

            while (static::where('slug', $profile->slug)->exists()) {
                $profile->slug = $originalSlug . '-' . $count++;
            }
        });
    }
}
