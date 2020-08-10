<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogRequset;
use App\Models\Blog;
use App\services\MediaService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:blogs_list')->only(['index']);
        $this->middleware('permission:blogs_create')->only(['create', 'store']);
        $this->middleware('permission:blogs_edit')->only(['edit', 'update']);
        $this->middleware('permission:blogs_delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.pages.blogs.index',compact('blogs'));

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.blogs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequset $request)
    {
        $blogs= Blog::create($request->all());
        if ($request->hasfile('image')) {
            MediaService::uploadFile($request->file('image'), $blogs);
       }
        return redirect()->route('admin.blogs.index')->with('success', 'Data is Saved .. !!');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::find($id);
        return view('admin.pages.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequset $request, $id)
    {
        $blog=Blog::find($id);
        $blog->update($request->all());
        if ($request->hasfile('image')) {
            MediaService::updateFile($request->file('image'), $blog);
       }
            return redirect()->route('admin.blogs.index')->with(['success'=>'Update Blog']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index');
    }
}
