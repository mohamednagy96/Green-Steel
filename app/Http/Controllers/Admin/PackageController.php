<?php

namespace App\Http\Controllers\Admin;

use App\Events\MyEvent;
use Pusher\Pusher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PackageFormRequest;
use App\Http\Resources\FilesResource;
use App\Models\Package;
use App\Models\Product;
use App\Models\Service;
use App\services\MediaService;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:packages_list')->only(['index']);
        $this->middleware('permission:packages_create')->only(['create', 'store']);
        $this->middleware('permission:packages_edit')->only(['edit', 'update']);
        $this->middleware('permission:packages_delete')->only(['destroy']);
    }
    public function index()
    {
        $packages=Package::paginate(15);
       
        return view('admin.pages.packages.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Package::all()->count() < 3){
        $create=$request->all();
        if(isset($create['invisible'])){
            $create['invisible']=1;
        }else{
            $create['invisible']=0;

        }
        $package = Package::create($create);
        $package->seo()->create($request->seo);
//Notifications Pusher ///////////////////////////////////////////////
         //Remember to change this with your cluster name.
         $options = array(
            'cluster' => 'eu', 
            'encrypted' => true
        );
       //Remember to set your credentials below.
        $pusher = new Pusher(
            '07ae158646bd85bde360',
            'bc27ecfe5b45471aacd4',
            '981681',
            $options
        );
// message & Title Should Be Array to BestPrac.. with Pusher
$admin_id=auth('admin')->user();

        $message= array(
            'admin_id'=>$admin_id->id,
            'message'=>"Success Packages",
        );
        //Send a message to notify channel with an event name of notify-event
        $pusher->trigger('notification', 'my-event', $message);  
        return redirect()->route('admin.packages.index')->with('success', 'Data is Saved .. !!');

    }
    return redirect()->route('admin.packages.index')->with('error','Sorry You Can Only Story 3 Packages.!');

    }


    private function extractIdFromToken($token) {
        if ($token === null) {
           throw new \Exception('Missing token');
        }
    
        $tokenValue = explode(':', Crypt::decrypt($token));
        // do verification of time needed else go to next
        return $tokenValue[0] ?? null;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package=Package::findOrFail($id);
        return view('admin.pages.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(PackageFormRequest $request, Package $package)
    {
        $package->update($request->all());
        $package->seo()->update($request->seo);
       
        return redirect()->route('admin.packages.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('admin.packages.index');
    }


}
