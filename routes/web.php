<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[FrontendController::class,'login'])->name('login');

Route::post('dologin',[FrontendController::class,'dologin'])->name('dologin');

Route::get('register',[FrontendController::class,'register'])->name('register');

Route::post('saveuser',[FrontendController::class,'saveuser'])->name('saveuser');

Route::group(['middleware' => 'auth'], function () {

Route::get('logout',[FrontendController::class,'logout'])->name('logout');


Route::get('home',[FrontendController::class,'home'])->name('home');

Route::get('addaddress',[FrontendController::class,'addaddress'])->name('addaddress');

Route::post('saveaddress',[FrontendController::class,'saveaddress'])->name('saveaddress');

Route::get('editaddress/{userId}',[FrontendController::class,'editaddress'])->name('editaddress');

Route::post('updateaddress',[FrontendController::class,'updateaddress'])->name('updateaddress');

Route::get('deleteaddress/{id}',[FrontendController::class,'deleteaddress'])->name('deleteaddress');

});