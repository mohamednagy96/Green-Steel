<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Company extends Model implements HasMedia
{
    use HasMediaTrait ;

    protected $fillable = [
        'name','description','company_id','category_id'
    ]; 
    
    public function products(){
        return $this->belongsToMany(Product::class,'companies_products');
    }
}
