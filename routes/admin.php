<?php

use App\Models\Category;
use App\Models\Company;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**
 * Home page
 */
Route::get('/', 'HomeController@index')->name('home');

/**
 * admin users
 */
Route::resource('admin_users', 'AdminUserController')->except(['show']);

/**
 * roles
 */
Route::resource('roles', 'RoleController')->except(['show']);

Route::resource('products', 'ProductController');
Route::delete('image', 'ProductController@deleteImage')->name('image');

Route::resource('services', 'ServiceController');
Route::resource('aboutus', 'AboutUsController');
/**
 * Dashboard
 * setting
 */
Route::get('settings', 'SettingController@index')->name('settings.index');
Route::post('setting/update','SettingController@update')->name('settings.update');
/**
 * media
 */
Route::post('media/{media}', 'MediaController@store')->name('media.store');
Route::delete('media/{media}', 'MediaController@destroy')->name('media.destroy');

Route::get('search','HomeController@search');


/**
 * Contact Us
 */
Route::resource('contacts','ContactController');

/**
 * Categories
 */
Route::resource('categories','CategoryController');

/**
 * Companies
 */
Route::resource('companies','CompanyController');


/**
 * Blogs
 */
Route::resource('blogs','BlogController');





Route::get('/ajax-subcat',function(){
    $cat_id=Request::input('company_id');
    $company=Company::find($cat_id);
    $categories=$company->categories;
    return response()->json($categories);
});