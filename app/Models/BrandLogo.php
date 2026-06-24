<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandLogo extends Model
{
    protected $fillable = ['name','logo_image','website_url','is_active','order'];
}
