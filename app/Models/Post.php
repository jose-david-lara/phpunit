<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    //Mutartors
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    //Accesors
    public function getSlugAttribute()
    {
        return str_replace(' ','-',$this->name);
    }

    public function href()
    {
        return "blog/{$this->slug}";
    }
}
