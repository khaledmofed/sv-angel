<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Principle extends Model
{
    protected $fillable = ['number','title','description','quote_text','quote_author','quote_position','order','is_active'];
}
