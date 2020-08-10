<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServicesFormRequest;
use App\Http\Resources\FilesResource;
use App\Models\Service;
use App\services\MediaService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function __construct(){
        $this->middleware('permission:services_list')->only(['index']);
        $this->middleware('permission:services_create')->only(['create','store']);
        $this->middleware('permission:services_edit')->only(['edit','update']);
        $this->middleware('permissiom:services_delete')->only('destory');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with('image')->paginate();
   
        return view('admin.pages.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicesFormRequest $request)
    {
        $requestData = $request->all();
        $service = Service::create($requestData);
        if ($request->hasfile('image')) {
            MediaService::uploadFile($request->file('image'), $service);
       }
        return redirect()->route('admin.services.index')->with('success', 'Data is Saved .. !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.pages.services.edit', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.pages.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServicesFormRequest $request, Service $service)
    {
        $requestData = $request->all();

        $service->update($requestData);
        if ($request->hasfile('image')) {
            MediaService::updateFile($request->image, $service);
       }
        return redirect()->route('admin.services.index')->with('success', 'Data is updated .. !!');
    //     $service->update($request->all());
    //     $service->seo()->update($request->seo); 
    //     if ($request->hasfile('files')) {
    //         MediaService::uploadFiles($request->file('files'),$service,'service');
    //    }
    //     return redirect()->route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        
        return redirect()->route('admin.services.index');

    }
}
