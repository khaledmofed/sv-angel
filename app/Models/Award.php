<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $fillable = ['project_name','award_name','year','award_image','is_active','order'];
}
