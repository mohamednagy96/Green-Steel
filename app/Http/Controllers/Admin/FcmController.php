<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class FcmController extends Controller
{
public function index(Request $request){
$input=$request->all();
// return response()->json($input);
// return response()->json(['data'=>'Hello World !!']);
$fcm_token=$input['fcm_token'];
$user_id=$input['user_id'];

$user= Admin::FindOrFail($user_id);


$user->fcm_token=$fcm_token;
$user->save();

return response()->json([

    'success'=>true,
    'message'=> 'User Token update Successfly'
]);

}

}
