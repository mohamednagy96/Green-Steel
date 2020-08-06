<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**
 * Home page
 */
Route::get('/', 'HomeController@index')->name('home');
Route::get('chat_section', 'HomeController@chatIndex')->name('home.chatIndex');

Route::post('/send_chat', 'HomeController@createChat')->name('home.createChat');

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

Route::resource('packages', 'PackageController');
Route::resource('services', 'ServiceController');
Route::resource('aboutus', 'AboutUsController');
Route::resource('ourclients', 'OurClientController');
/**
 * Dashboard
 * setting
 */
Route::get('settings', 'SettingController@index')->name('settings.index');
Route::post('setting/update','SettingController@update')->name('settings.update');
Route::resource('subscribers', 'SubscriberController');
/**
 * media
 */
Route::post('media/{media}', 'MediaController@store')->name('media.store');
Route::delete('media/{media}', 'MediaController@destroy')->name('media.destroy');

Route::get('search','HomeController@search');

Route::get('sss', function(){
    return view('admin.pages.Notifications.counter');
});


/**
 * Contact Us
 */
Route::resource('contacts','ContactController');

Route::resource('sliders','HeaderSliderController');




