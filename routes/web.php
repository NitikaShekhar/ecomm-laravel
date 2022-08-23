<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CallApiController;
use App\Http\Controllers\categoryController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|/edit_api/{{$restaurant['id']}}"
*/

Route::get('/', function ()
 {
    return view('welcome');
});

//register Api
Route::get('register',[RegisterController::class,'register'])->name('register');
Route::post('registerApi',[RegisterController::class,'registerApi'])->name('registerApi');

Route::get('login',[RegisterController::class,'login'])->name('login');

//Route::get('restaurant/add',[RegisterController::class,'restaurant_add'])->name('rest_add');
Route::get('add', [CallApiController::class,'addRestaurant'])->name('restaurant.add');
Route::get('category', [categoryController::class,'store']);
Route::post('add_Api', [CallApiController::class,'addRestaurantApi'])->name('addApi');
Route::get('list',[CallApiController::class,'showRestaurantApi'])->name('restaurant.list');
Route::get('edit/{id}', [CallApiController::class,'editRestaurant'])->name('restaurant.edit');
Route::put('edit_api/{id}', [CallApiController::class,'editRestaurantApi'])->name('editApi');
Route::get('image', [CallApiController::class,'addImage'])->name('addImage');
Route::post('image_Api', [CallApiController::class,'addImageApi'])->name('addImageApi');

Route::delete('delete/{id}', [CallApiController::class,'destroyRestaurant'])->name('restaurant.delete');



