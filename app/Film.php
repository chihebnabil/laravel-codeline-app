<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Film extends Model  implements HasMedia
{
    use HasMediaTrait, Slugable;
    //
    protected $dates = [
        'created_at',
        'updated_at',
        'realease_date',
    ];
    public function genres()
    {
        return $this->hasMany('App\Genre');
    }
    public function photo() {
        return $this->belongsTo(Image::class);
    }
    public function comments() {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function year() {
        return $this->realease_date->format('Y');
    }
    public function title() {
        return "$this->name ({$this->year()})";
    }
}
