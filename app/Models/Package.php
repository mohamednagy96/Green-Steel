<?php

namespace App\Models;
use App\Models\Service;
use App\Models\Product;
use App\Traits\PackageItemTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Illuminate\Database\Eloquent\Model;
// use Spatie\Translatable\HasTranslations;

class Package extends Model implements HasMedia
{
    use PackageItemTrait , HasMediaTrait;
    // use HasTranslations;
    // public $translatable = ['name','description']; //trasnslatable data en,er

    protected $fillable=['name','slug','description','price','order','invisible','color_picker'];

    public function products()
    {
        return $this->morphedByMany(Product::class, 'package_items');
    }
 
    
    public function services()
    {
        return $this->morphedByMany(Service::class, 'package_items');
    }





   
}
