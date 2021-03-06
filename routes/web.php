<?php

//use GuzzleHttp\Psr7\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

?>