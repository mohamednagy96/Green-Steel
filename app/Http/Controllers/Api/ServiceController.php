<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\ServicesResource;
use App\Models\Service;
use Illuminate\Http\Request;
/**
 * @group Services
 *
 * Apis for Services
 */
class ServiceController extends Controller
{
        /**
     * Fetch Services
     *
     * Fetch all Services
     *
     * @queryParam take Return spacifc number of services. Example: 4
     *
     * @response {
     *  "data": [
     *     {
     *      "id" : 1,
     *      "name" : "service name" ,
     *      "description" : "service description" ,
     *      "slug" :  "service_slug",
     *      "image" :  "http://localhost:8000/images/default.jpg"
     *     }
     *  ]
     * }
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      
            $q = Service::query(); // $q for query

        if ($take = $request->take) {
            $services = $q->take($take)->latest()->get();
           
            }elseif($request->list == 'all'){
                $services=Service::all();

            }else{
                $services=Service::paginate(15);
        }
            return ServicesResource::collection($services);
    }



 /**
     * Fetch Service
     *
     * Fetch single service
     *
     *
     * @response {
     *  "data":
     *     {
     *      "id" : 1,
     *      "name" : "service name" ,
     *      "description" : "service description" ,
     *      "slug" :  "service_slug",
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
        $service=Service::findOrFail($id);
        return new ServiceResource($service);
    }

}
