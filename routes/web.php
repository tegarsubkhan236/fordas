<?php

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
    return view('Landing/pages/landing');
});

Route::get('login', 'AuthController@login_page');
Route::post('login', 'AuthController@login_process')->name('login');
Route::get("/logout", "AuthController@logout")->name('logout');

Route::prefix("/super")->namespace("SuperAdmin")->middleware('gateway:1')->group(function () {
    Route::get("/", "HomeController@index")->name("super.home");

    Route::get("/user", "UserController@index")->name("user");
    Route::get("/user/detail/{id}/{nama}", "UserController@detail")->name("user.detail");
    Route::post("/user/store", "UserController@store")->name("user.store");
    Route::post("/user/update/{id?}", "UserController@update")->name("user.update");
    // Route::delete("/user/delete/{id}", "UserController@delete")->name("user.delete");

    Route::get("/wilayah", "WilayahController@index")->name("wilayah");
    Route::get("/wilayah/detail/{id}/{nama}", "WilayahController@detail")->name("wilayah.detail");
    Route::post("/wilayah/store", "WilayahController@store")->name("wilayah.store");
    Route::post("/wilayah/update/{id?}", "WilayahController@update")->name("wilayah.update");
    // Route::delete("/wilayah/delete/{id}", "WilayahController@delete")->name("wilayah.delete");

    Route::get("/das", "WilayahDASController@index")->name("das");
    Route::get("/das/create/{id}", "WilayahDASController@create")->name("das.create");
    // Route::get("/das/edit/{id}", "WilayahDASController@edit")->name("das.edit");
    Route::post("/das/store/{id}", "WilayahDASController@store")->name("das.store");
    Route::post("/das/update/{id}", "WilayahDASController@update")->name("das.update");
    Route::delete("/das/delete/{id}", "WilayahDASController@delete")->name("das.delete");
});
