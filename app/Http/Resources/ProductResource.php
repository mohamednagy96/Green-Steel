<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'name'=>$this->name,
            'description'=>$this->description,
            'slug'=>$this->slug,
            'images'=> $this->images()->count() ? $this->images->map(function($image){ return $image->getUrl(); })->toArray() : ['/images/default'],
            'seo'=> $this->seo
        ];

        //return parent::toArray($request);
    }
}
