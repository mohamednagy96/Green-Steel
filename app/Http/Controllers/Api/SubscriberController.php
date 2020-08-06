<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SubscribersFormRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{


    public function store(SubscribersFormRequest $request)
    {
        $subscriberStore = Subscriber::create($request->validated());
        return $this->successResponse();
    }

}
