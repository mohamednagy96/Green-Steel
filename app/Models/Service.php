<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use App\Traits\PackageItemTrait;
use Illuminate\Database\Eloquent\Model;

class Service extends Model implements HasMedia
{
    use  HasMediaTrait,PackageItemTrait;
    protected $fillable = [
        'name', 'slug','description','invisible'
    ];
    public function images(){
        
        return $this->media();
    }

    public function image(){
        return $this->morphOne(config('medialibrary.media_model'), 'model')->where('isDefault', 1);
    }

    public function contacts(){
        return $this->hasMany(ContactUs::class,'service_id');
    }
}
