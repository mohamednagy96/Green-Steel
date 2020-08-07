<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductFormRequest;
use App\Http\Resources\FilesResource;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use App\services\MediaService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:products_list')->only(['index']);
        $this->middleware('permission:products_create')->only(['create', 'store']);
        $this->middleware('permission:products_edit')->only(['edit', 'update']);
        $this->middleware('permission:products_delete')->only(['destroy']);
    }

    public function index()
    {
        $products = Product::with('image')->paginate(15);
        return view('admin.pages.products.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company=Company::pluck('name','id')->toArray();
        $category=Category::pluck('name','id')->toArray();
        return view('admin.pages.products.create',compact('company','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        $requestData = $request->all();
        $product = Product::create($requestData);
        if($request->has('image')){
            MediaService::uploadFile($request->image, $product, 'image');
        }
        return redirect()->route('admin.products.index')->with(['success'=>'Save Product']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $company=Company::pluck('name','id')->toArray();
        $category=Category::pluck('name','id')->toArray();
        return view('admin.pages.products.edit', compact('product','company','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, Product $product)
    {
        $requestData = $request->all();
        $product->update($requestData);
        if($request->has('image')){
            MediaService::updateFile($request->image, $product, 'image');
        }
        return redirect()->route('admin.products.index')->with(['success'=>'Update Product']);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
