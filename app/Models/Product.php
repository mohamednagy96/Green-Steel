<?php

namespace App\Models;

use App\Traits\PackageItemTrait;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Product extends Model implements HasMedia
{
    use HasMediaTrait ,PackageItemTrait;

    protected $fillable = [
        'name', 'slug','description','invisible'
    ];

    public function images(){
        
        return $this->media();
    }

    public function image(){
        return $this->morphOne(config('medialibrary.media_model'), 'model')->where('isDefault', 1);
    }

}
