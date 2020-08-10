<?php

//use GuzzleHttp\Psr7\Request;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;



Route::auth();

Route::namespace('Admin\Auth')->name('admin.')->prefix('admin')->group(function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login.show');
    Route::post('login', 'LoginController@login')->name('login');
});
Route::post('admin/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');



Route::get('apidocs', function(){
    return view('apidoc.index');
});

Route::get('search','HomeController@search');

Route::get('/ajax-subcat',function(){
    $cat_id=Request::input('company_id');
    $company=Company::find($cat_id);
    $categories=$company->categories;
    return response()->json($categories);
});



?>