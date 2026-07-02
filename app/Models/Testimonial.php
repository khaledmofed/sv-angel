<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class Testimonial extends Model
{
    use Translatable;

    protected $fillable = ['quote','author_name','author_title','author_company','author_photo','is_active','order','translations'];
    protected $casts = ['translations' => 'array'];
}
