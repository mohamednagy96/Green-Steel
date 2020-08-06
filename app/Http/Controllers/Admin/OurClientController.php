<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OurClientRequest;
use App\Modles\OurClient ;
use App\services\MediaService;
use Illuminate\Http\Request;

class OurClientController extends Controller
{

    public function __construct(){
        $this->middleware('permission:clients_list')->only(['index']);
        $this->middleware('permission:clients_create')->only(['create','store']);
        $this->middleware('permission:clients_edit')->only(['edit','update']);
        $this->middleware('permissiom:clients_delete')->only('destory');
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourClients=OurClient::paginate(15);
        return view('admin.pages.ourclients.index',compact('ourClients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.ourclients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OurClientRequest $request)
    {
       $client= OurClient::create($request->all());
        if ($request->hasfile('file')) {
            MediaService::uploadFile($request->file('file'), $client);
       }
        return redirect()->route('admin.ourclients.index')->with('success', 'Data is Saved .. !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OurClient  $ourclient
     * @return \Illuminate\Http\Response
     */
    public function show(OurClient $ourclient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurClient  $ourclient
     * @return \Illuminate\Http\Response
     */
    public function edit(OurClient $ourclient)
    {
        return view('admin.pages.ourclients.edit', compact('ourclient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $ourclient
     * @return \Illuminate\Http\Response
     */
    public function update(OurClientRequest $request, OurClient $ourclient)
    {
        $ourclient->update($request->all());
        if ($request->hasfile('file')) {
            MediaService::updateFile($request->file('file'), $ourclient);
       }
        return redirect()->route('admin.ourclients.index')->with('success', 'Data is Update .. !!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurClient $ourclient)
    {
        $ourclient->delete();
        return redirect()->route('admin.ourclients.index');
    }
}
