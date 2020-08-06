<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Token Fcm With Admin
// Route::post('save-token','Admin\FcmController@index');

/**
 * our client
 */
Route::apiResource('clients','Api\OurClientController')->only(['index','show']);
/**
 * Settings
 */
Route::apiResource('settings','Api\SettingController')->only(['index']);
/**
 * products
 */
Route::apiResource('products', 'Api\ProductController')->only(['index', 'show']);
/**
 * services
 */
Route::apiResource('services','Api\ServiceController')->only(['index', 'show']);

/**
 * packages
 */
Route::apiResource('packages','Api\PackageController')->only(['index','show']);

/**
 * subscribers
 */
Route::post('subscribers','Api\SubscriberController@store');   //Subscribers On Website

/**
 * about Us
 */
Route::apiResource('about_us','Api\AboutUsController')->only(['index']);   //List

/**
 * contact us
 */
Route::post('contact_us','Api\ContactController@store');

/**
 * sliders
 */
Route::apiResource('sliders','Api\HeaderSliderController')->only(['index','show']);

Route::post('search','Api\SearchController@search');
