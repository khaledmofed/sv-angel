<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class Hero extends Model
{
    use Translatable;

    protected $fillable = ['title','headline','subheadline','description','cta_text','cta_url','bg_image','video_url','is_active','translations'];
    protected $casts = ['translations' => 'array'];
}
