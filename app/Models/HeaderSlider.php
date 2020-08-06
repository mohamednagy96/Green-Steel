<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class HeaderSlider extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable=['title','description','button','button_link'];

    public function image(){
        return $this->morphOne(config('medialibrary.media_model'), 'model');
    }

}
