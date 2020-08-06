<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OurClientResource;
use App\Modles\OurClient;
use Illuminate\Http\Request;

/**
 * @group Clients
 *
 * Apis for Clients
 */

class OurClientController extends Controller
{


    /**
     * Fetch Clients
     *
     * Fetch all clients
     *
     * @queryParam take Return spacifc number of clients. Example: 4
     *
     * @response {
     *  "data": [
     *     {
     *      "id" : 1,
     *      "name" : "client name" ,
     *      "description" : "client description" ,
     *      "image" :  "http://localhost:8000/images/default.jpg"
     *     }
     *  ]
     * }
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $q = OurClient::query(); // $q for query
        $q->with('image');

        if ($take = $request->take) {
            $ourClients = $q->take($take)->latest()->get();
        } else {
            $ourClients = $q->latest()->paginate(15);
        }
        return OurClientResource::collection($ourClients);
    }

        /**
     * Fetch Client
     *
     * Fetch single client
     *
     *
     * @response {
     *  "data":
     *     {
     *      "id" : 1,
     *      "name" : "client name" ,
     *      "description" : "client description" ,
     *      "image" :  "http://localhost:8000/images/default.jpg"
     *     }
     *
     * }
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $client = OurClient::findOrFail($id);
        return new OurClientResource($client);
    }
    public function list()
    {
        $clients = OurClient::all();
        return new OurClientResource($clients);
    }
}
