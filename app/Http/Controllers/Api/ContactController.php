<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiContactRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function store(ApiContactRequest $request)
    {
        ContactUs::create($request->all());
        return $this->successResponse();
    }

}
