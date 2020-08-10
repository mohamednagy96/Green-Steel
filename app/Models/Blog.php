<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Blog extends Model implements HasMedia
{
    use HasMediaTrait ;
    
    protected $fillable = [
        'title','content'
    ]; 

    public function image(){
        return $this->morphOne(config('medialibrary.media_model'), 'model');
    }

}
