<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HeaderSliderResource;
use App\Models\HeaderSlider;
use Illuminate\Http\Request;

/**
 * @group Sliders
 *
 * Apis for Sliders
 */

class HeaderSliderController extends Controller
{
    /**
     * Fetch Sliders
     *
     * Fetch all Sliders
     *
     * 
     *
     * @response {
     *  
     * "data": [
     *   {
     *       "title": "slider name",
     *       "description": "slider description",
     *       "button": "slider button",
     *       "button_link": "slider button_link",
     *       "image:"http://localhost:8000/images/default.jpg"
     *       "created_at": "2020-04-14T22:00:00.000000Z",
     *       "updated_at": "2020-04-14T22:00:00.000000Z"
     *   }
     *  ]
     * }
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=HeaderSlider::all();
        return HeaderSliderResource::collection($sliders);
    }

 /**
     * Fetch sliders
     *
     * Fetch single Slider
     *
     *
     * @response {
     * {
     *  "data": 
     * {
     *   "id": 1,
     *   "title": "Keaton Mann",
     *   "description": "Architecto qui vel eum consequatur repudiandae. Est dicta vero odio amet quos dignissimos iste aspernatur. Qui veniam aut et voluptatibus.",
     *   "button": "slider button",
     *   "button_link": "slider button_link",
     *   "image:"http://localhost:8000/images/default.jpg"
     *   "created_at": "2020-04-16T21:00:21.000000Z",
     *    "updated_at": "2020-04-16T21:00:21.000000Z",
     *     }
     *   }
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider=HeaderSlider::findOrFail($id);
        return new HeaderSliderResource($slider);
    }

}
