<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutStory extends Model
{
    protected $fillable = [
        'number', 'title', 'description', 'image', 'image_link',
        'second_image', 'second_image_url', 'second_image_link', 'signature', 'order', 'is_active',
    ];

    protected $casts = ['is_active' => 'boolean'];

    public function scopeActive($q) { return $q->where('is_active', true)->orderBy('order'); }
}
