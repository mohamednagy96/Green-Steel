<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeaderSlider;
use App\services\MediaService;
use Illuminate\Http\Request;

class HeaderSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=HeaderSlider::paginate(15);
        return view('admin.pages.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider= HeaderSlider::create($request->all());
        if ($request->hasfile('file')) {
            MediaService::uploadFile($request->file('file'), $slider);
       }
        return redirect()->route('admin.sliders.index')->with('success', 'Data is Saved .. !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider=HeaderSlider::findOrFail($id);
        return view('admin.pages.sliders.edit', compact('slider'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider=HeaderSlider::findOrFail($id);
        $slider->update($request->all());
        if ($request->hasfile('file')) {
            MediaService::updateFile($request->file('file'), $slider);
       }
        return redirect()->route('admin.sliders.index')->with('success', 'Data is Update .. !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider=HeaderSlider::findOrFail($id);
        $slider->delete();
        return redirect()->route('admin.sliders.index');
    }
}
