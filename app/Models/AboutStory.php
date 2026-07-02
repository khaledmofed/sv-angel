<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class AboutStory extends Model
{
    use Translatable;

    protected $fillable = [
        'number', 'title', 'description', 'image', 'image_link',
        'second_image', 'second_image_url', 'second_image_link',
        'signature', 'order', 'is_active', 'translations',
    ];

    protected $casts = ['is_active' => 'boolean', 'translations' => 'array'];

    public function scopeActive($q) { return $q->where('is_active', true)->orderBy('order'); }
}
