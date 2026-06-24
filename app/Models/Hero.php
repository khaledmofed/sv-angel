<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = ['headline','subheadline','description','cta_text','cta_url','bg_image','video_url','is_active'];
}
