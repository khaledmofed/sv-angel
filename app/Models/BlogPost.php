<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = ['title','slug','excerpt','content','featured_image','category','author','read_time','status','external_url','published_at','meta_title','meta_description'];
    protected $casts = ['published_at' => 'datetime'];
}
