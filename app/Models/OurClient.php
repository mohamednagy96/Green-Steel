<?php

namespace App\Modles;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
class OurClient extends Model implements HasMedia
{  
    use HasMediaTrait;
    protected $fillable=['name','description'];


    public function images(){
        return $this->media();
    }

    public function image(){
        
        return $this->morphOne(config('medialibrary.media_model'),'model');
    }
}
