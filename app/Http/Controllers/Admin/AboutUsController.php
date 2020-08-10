<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutUsRequest;
use App\Models\About;
use App\services\MediaService;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:about_list')->only(['index']);
        $this->middleware('permission:about_create')->only(['create', 'store']);
        $this->middleware('permission:about_edit')->only(['edit', 'update']);
        $this->middleware('permission:about_delete')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutus = About::all();
        return view('admin.pages.aboutus.index',compact('aboutus'));

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.aboutus.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutUsRequest $request)
    {
        $aboutUs= About::create($request->all());
        if ($request->hasfile('image')) {
            MediaService::uploadFile($request->file('image'), $aboutUs);
       }
        return redirect()->route('admin.aboutus.index')->with('success', 'Data is Saved .. !!');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutus=About::find($id);
        return view('admin.pages.aboutus.edit', compact('aboutus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(AboutUsRequest $request, $id)
    {
        $aboutus=About::find($id);
        $aboutus->update($request->all());
        if ($request->hasfile('image')) {
            MediaService::updateFile($request->file('image'), $aboutus);
       }
    
        return redirect()->route('admin.aboutus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $aboutus)
    {
        $aboutus->delete();
        return redirect()->route('admin.aboutus.index');
    }
}
