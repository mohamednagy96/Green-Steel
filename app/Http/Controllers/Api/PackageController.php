<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PackageResource;
use App\Http\Resources\SingelPackageResource;
use App\Models\Package;
use Illuminate\Http\Request;

/**
 * @group Packages
 *
 * Apis for Packages
 */
class PackageController extends Controller
{
    /**
     * Fetch Packages
     *
     * Fetch all packages
     *
     * @queryParam take Return spacifc number of products. Example: 1
     *
     * @response {
     *  "data": [
     * {
     *   "id":1,
     *   "name":"Keaton Mann",
     *   "description":"Architecto qui vel eum consequatur repudiandae. Est dicta vero odio amet quos dignissimos iste aspernatur. Qui veniam aut et voluptatibus.",
     *   "price":828,
     *   "slug":"cupiditate-et-ipsam-vitae-sed-minima-nesciunt"
     * }
     *  ]
     * }
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = Package::query(); // $q for query


        if ($take = $request->take) {
            $packages = $q->take($take)->latest()->get();
        } else {
            $packages = $q->latest()->paginate(15);
        }

        return PackageResource::collection($packages);
    }
   /**
     * Fetch Package
     *
     * Fetch single Package
     *
     *
     * @response {
     * {
     *  "data": 
     * {
     *   "id": 1,
     *   "name": "Keaton Mann",
     *   "description": "Architecto qui vel eum consequatur repudiandae. Est dicta vero odio amet quos dignissimos iste aspernatur. Qui veniam aut et voluptatibus.",
     *   "price": 828,
     *   "slug": "cupiditate-et-ipsam-vitae-sed-minima-nesciunt",
     *   "invisible": "true",
     *   "color_picker": "#000000",
     *   "created_at": "2020-04-16T21:00:21.000000Z",
     *    "updated_at": "2020-04-16T21:00:21.000000Z",
     *    "seo": null
     *     }
     *   }
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $singelPackage = Package::findOrFail($id);
        return new SingelPackageResource($singelPackage);
    }
}
