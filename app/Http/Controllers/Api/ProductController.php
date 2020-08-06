<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductsResource;
use App\Models\Product;
use Illuminate\Http\Request;

/**
 * @group Products
 *
 * Apis for Products
 */

class ProductController extends Controller
{
    /**
     * Fetch Products
     *
     * Fetch all products
     *
     * @queryParam take Return spacifc number of products. Example: 4
     *
     * @response {
     *  "data": [
     *     {
     *      "id" : 1,
     *      "name" : "product name" ,
     *      "description" : "product description" ,
     *      "slug" :  "product_slug",
     *      "image" :  "http://localhost:8000/images/default.jpg"
     *     }
     *  ]
     * }
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $request)
    {
        $q = Product::query(); // $q for query

        $q->with('image');

        if ($take = $request->take) {
            $products = $q->take($take)->latest()->get();
        } else {
            $products = $q->latest()->paginate(15);
        }

        return ProductsResource::collection($products);
    }




    /**
     * Fetch Product
     *
     * Fetch single product
     *
     *
     * @response {
     *  "data":
     *     {
     *      "id" : 1,
     *      "name" : "product name" ,
     *      "description" : "product description" ,
     *      "slug" :  "product_slug",
     *      "images" :  ["http://localhost:8000/images/default.jpg"],
     *      "seo" : null
     *     }
     *
     * }
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id);

        return new ProductResource($product);
    }
}
