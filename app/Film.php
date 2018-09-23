<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Film extends Model  implements HasMedia
{
    use HasMediaTrait;
    //
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function genres()
    {
        return $this->hasMany('App\Genre');
    }
}
