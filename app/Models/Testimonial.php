<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['quote','author_name','author_title','author_company','author_photo','is_active','order'];
}
