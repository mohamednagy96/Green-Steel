<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
class Category extends Model implements HasMedia
{
    use HasMediaTrait ;
    
    protected $fillable = [
        'name','description'
    ]; 

    public function products(){
        return $this->hasMany(Product::class,'product_id');
    }
}
