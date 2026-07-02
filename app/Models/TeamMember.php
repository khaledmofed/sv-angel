<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class TeamMember extends Model
{
    use Translatable;

    protected $fillable = ['name','title','photo','bio','twitter_url','linkedin_url','is_active','order','translations'];
    protected $casts = ['translations' => 'array'];
}
