<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PackageResource;
use App\Http\Resources\PackagesResouce;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductsResource;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\ServicesResource;
use App\Models\Package;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $q=$request->name;
        $packages=Package::where('name','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->get();
        if($packages->count() > 0){
            $search[]=['packages'=>PackagesResouce::collection($packages)];
        }
        $products=Product::where('name','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->get();
        if($products->count() > 0){
            $search[]=['products'=>ProductsResource::collection($products)];
        }
        $services=Service::where('name','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->get();
        if($services->count() > 0){
            $search[]=['services'=>ServicesResource::collection($services)];
        }
        $res['data'] = $search;
        return $this->dataResponse($res);
    }
}
