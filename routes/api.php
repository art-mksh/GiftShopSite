<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteSettingsController;

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


Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::get('/products', [ProductController::class, 'index']);
Route::post('/upload-file',[ProductController::class, 'uploadFile']);
Route::get('/products/{product}',[ProductController::class, 'show']);

//Route::get('/site-settings/{id}',[SiteSettingsController::class, 'get']);
//Route::get('/site-settings/',[SiteSettingsController::class, 'get']);

Route::apiResource('site-settings', SiteSettingsController::class);

//Route::get('/site-settings/{id}', function () {
//Route::redirect('site-settings', '/products', 301);
//    return 'Hello World';
//});


Route::group(['middleware' => 'auth:api'], function(){
    Route::get('/users',[UserController::class, 'index']);
    Route::get('users/{user}',[UserController::class, 'show']);
    Route::patch('users/{user}',[UserController::class, 'update']);
    Route::get('users/{user}/orders',[UserController::class, 'showOrders']);
    Route::patch('products/{product}/units/add',[ProductController::class, 'updateUnits']);
    Route::patch('orders/{order}/deliver',[OrderController::class, 'deliverOrder']);
    Route::resource('/orders', OrderController::class);
    Route::resource('/products', ProductController::class)->except(['index','show']);

});


/*

Route::middleware('api')->group(function () {
    Route::resource('products', ProductController::class);
});

*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
