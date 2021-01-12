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
Route::get('register', 'AuthController@register_page');
Route::post('register', 'AuthController@register_process')->name('register');
Route::get("/logout", "AuthController@logout")->name('logout');
Route::get("/list", "HomeController@list")->name('list');

// 1. super admin
Route::prefix("/super")->namespace("SuperAdmin")->middleware('gateway:1')->group(function () {
    Route::get("/", "HomeController@index")->name("super.home");

    Route::get("/profile", "HomeController@profile")->name("profile");
    Route::post("/profile/update/{id?}", "HomeController@profile_update")->name("profile.update");

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
    Route::post("/das/update/{id?}", "WilayahDASController@update")->name("das.update");
    Route::delete("/das/delete/{id}", "WilayahDASController@delete")->name("das.delete");
});

// 2. pusat_ketua
Route::prefix("/pusat_ketua")->namespace("KetuaPusat")->middleware('gateway:2')->group(function () {
    Route::get("/", "HomeController@index")->name("pusat_ketua.home");
});

// 3. pusat sekre
Route::prefix("/pusat_sekre")->namespace("SekrePusat")->middleware('gateway:3')->group(function () {
    Route::get("/", "HomeController@index")->name("pusat_ketua.home");
});

// 4. wilayah_sekre
Route::prefix("/wilayah_sekre")->namespace("SekreWilayah")->middleware('gateway:4')->group(function () {
    Route::get("/", "HomeController@index")->name("wilayah_sekre.home");

    Route::get("/kategori", "KategoriController@index")->name("kategori");
    Route::get("/kategori/detail/{id}/{nama}", "KategoriController@detail")->name("kategori.detail");
    Route::post("/kategori/store", "KategoriController@store")->name("kategori.store");
    Route::post("/kategori/update/{id?}", "KategoriController@update")->name("kategori.update");
    // Route::delete("/kategori/delete/{id}", "KategoriController@delete")->name("kategori.delete");

    Route::get("/proposal", "ProposalController@index")->name("proposal");
    Route::get("/proposal/create", "ProposalController@create")->name("proposal.create");
    Route::get("/proposal/edit/{id}", "ProposalController@edit")->name("proposal.edit");
    Route::get("/proposal/detail/{id}", "ProposalController@detail")->name("proposal.detail");
    //
    Route::post("/proposal/store", "ProposalController@store")->name("proposal.store");
    Route::post("/proposal/update/{id?}", "ProposalController@update")->name("proposal.update");
    // Route::delete("/proposal/delete/{id}", "ProposalController@delete")->name("proposal.delete");
});

// 5. donatur
Route::prefix("/donatur")->namespace("Donatur")->middleware('gateway:5')->group(function () {
    Route::get("/", "HomeController@index")->name("donatur.home");
});
