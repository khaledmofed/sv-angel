<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title','number','description','image','items','is_active','order'];
    protected $casts = ['items' => 'array'];
}
