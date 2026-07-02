<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class BlogPost extends Model
{
    use Translatable;

    protected $fillable = ['title','slug','excerpt','content','featured_image','category','author','read_time','status','external_url','published_at','meta_title','meta_description','translations'];
    protected $casts = ['published_at' => 'datetime', 'translations' => 'array'];
}
