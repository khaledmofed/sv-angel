<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioCompany extends Model
{
    protected $fillable = ['name','logo','logo_url','website_url','category','stage','description','is_featured','is_active','order'];
}
