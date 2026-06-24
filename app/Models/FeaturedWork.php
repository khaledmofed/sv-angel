<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedWork extends Model
{
    protected $fillable = ['title','image','tags','url','is_featured','is_active','order'];
    protected $casts = ['tags' => 'array'];
}
