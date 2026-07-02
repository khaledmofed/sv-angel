<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class Principle extends Model
{
    use Translatable;

    protected $fillable = ['number','title','description','quote_text','quote_author','quote_position','order','is_active','translations'];
    protected $casts = ['translations' => 'array'];
}
