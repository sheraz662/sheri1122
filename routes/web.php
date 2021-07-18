<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
Route::get('/logout', function () {
	Session::forget('user');
return redirect('/login');

});
Route::view('/register','register');

Route::view('/login','login');
Route::Post('/login',[UserController::class,'user']);
Route::get('/',[ProductController::class,'aki']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::get('search',[ProductController::class,'search']);
Route::post('add-to-cart',[ProductController::class,'addtocart']);
Route::get('cartlist',[ProductController::class,'cartlist']);
Route::get('removecart/{id}',[ProductController::class,'removecart']);
Route::get('/ordernow',[ProductController::class,'ordernow']);
Route::post('/orderplace',[ProductController::class,'orderplace']);
Route::get('/myorders',[ProductController::class,'myorders']);
Route::Post('/register',[ProductController::class,'register']);