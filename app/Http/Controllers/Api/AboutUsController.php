<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutUsResource;
use App\Models\About;
use Illuminate\Http\Request;


/**
 * @group AboutUs
 *
 * Apis for AboutUs
 */
class AboutUsController extends Controller
{
    /**
     * Fetch AboutUs
     *
     * Fetch all AboutUs
     *
     * 
     *
     * @response {
     *  
     * "data": [
     *   {
     *       "title": "About Us",
     *       "description": "About Us",
     *       "created_at": "2020-04-14T22:00:00.000000Z",
     *       "updated_at": "2020-04-14T22:00:00.000000Z"
     *   }
     *  ]
     * }
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

                $aboutUs=About::all();
                return AboutUsResource::collection($aboutUs);

        }
    
}
