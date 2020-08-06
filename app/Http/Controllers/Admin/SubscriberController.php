<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SubscribersContactUsMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class SubscriberController extends Controller
{

    public function __construct()
    {
        // $this->middleware('permission:subscribers_list')->only(['index']);
        // $this->middleware('permission:subscribers_create')->only(['create', 'store']);
        // $this->middleware('permission:subscribers_edit')->only(['edit', 'update']);
        // $this->middleware('permission:subscribers_delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers=Subscriber::paginate(15);
        return view('admin.pages.subscribers.index',compact('subscribers'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subscribers=Subscriber::all();
        return view('admin.pages.subscribers.create',compact('subscribers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'emails'=>'required|array',
            'subject'=>'required',
            'message'=>'required',
        ]);
        $name=$request->input('name');
        $emails=$request->input('emails');
        $subject=$request->input('subject');
        $message=$request->input('message');
   
  Mail::to('anwarsaeed1@yahoo.com')->send(New SubscribersContactUsMail($name,$subject,$emails,$message));

  return redirect()->route('admin.subscribers.index')->with('success', 'Thanks You Your Mail Information Has Been Send');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }

}
