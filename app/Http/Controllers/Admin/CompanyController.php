<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\services\MediaService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:companies_list')->only(['index']);
        $this->middleware('permission:companies_create')->only(['create', 'store']);
        $this->middleware('permission:companies_edit')->only(['edit', 'update']);
        $this->middleware('permission:companies_delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=Company::paginate(10);
        return view('admin.pages.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.pages.companies.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $company=Company::create($request->company);
        if ($request->categories) {
            $company->categories()->attach($request->categories);
        }
        if($request->has('image')){
                MediaService::uploadFile($request->image, $company, 'image');
            }
            return redirect()->route('admin.companies.index')->with(['success'=>'Save Company']);
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
    public function edit(Company $company)
    {
        $categories=Category::all();
        $companyCategories=$company->categories->pluck('id')->toArray();
        // dd($companyCategories);
        return view('admin.pages.companies.edit', compact('company','categories','companyCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        
        $company->update($request->company);
        if ($request->categories) {
            $company->categories()->sync($request->categories);
        }
        if($request->has('image')){
            MediaService::updateFile($request->image, $company, 'image');
        }
        return redirect()->route('admin.companies.index')->with(['success'=>'Update Company']);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('admin.companies.index')->with(['success'=>'Delete Company']);
        
    }
}
