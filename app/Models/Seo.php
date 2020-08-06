<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = ['title','description','keyword','seoable_id','seoable_type'];

    public function seoable(){

       return $this->morphTo();

    }
    
}
