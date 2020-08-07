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
        'name','description','company_id','category_id'
    ];

    public function images(){
        
        return $this->media();
    }

    public function image(){
        return $this->morphOne(config('medialibrary.media_model'), 'model');
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
