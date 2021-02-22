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
    return redirect('/landing');
});

Route::get('login', 'AuthController@login_page');
Route::post('login', 'AuthController@login_process')->name('login');
Route::get('register', 'AuthController@register_page');
Route::post('register', 'AuthController@register_process')->name('register');
Route::get("/logout", "AuthController@logout")->name('logout');

//FRONT
Route::get("/landing", "HomeController@landing")->name('landing');
Route::get("/about", "HomeController@about")->name('about');

Route::get("/all_fordas", "HomeController@all_fordas")->name('all_fordas');
Route::get("/all_fordas/{id}", "HomeController@all_fordas_detail")->name('all_fordas_detail');
Route::get("/fordas_detail/{id}", "HomeController@fordas_detail")->name('fordas_detail');
Route::get("/fordas_list_laporan/{id}", "HomeController@fordas_list_laporan")->name('fordas_list_laporan');
Route::get("/view_laporan/{id}", "HomeController@view_laporan")->name('view_laporan');
Route::get("/donasi/{id}", "HomeController@donasi")->name('donasi');

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
    Route::get("/kategori", "KategoriController@index")->name("pusat_ketua.kategori");
    Route::get("/wilayah", "WilayahController@index")->name("pusat_ketua.wilayah");
    Route::get("/wilayah/detail/{id}/{nama}", "WilayahController@detail")->name("pusat_ketua.wilayah.detail");
    Route::get("/proposal", "ProposalController@index")->name("pusat_ketua.proposal");
    Route::post("/proposal/update/{id?}", "ProposalController@update")->name("pusat_ketua.proposal.update");
    Route::get("/proposal/detail/{id}", "ProposalController@detail")->name("pusat_ketua.proposal.detail");
    Route::get("/proposal/{id}/donasi", "ProposalController@donasi_by_proposal")->name("pusat_ketua.proposal.donasi");
});

// 3. pusat sekre
Route::prefix("/pusat_sekre")->namespace("SekrePusat")->middleware('gateway:3')->group(function () {
    Route::get("/", "HomeController@index")->name("pusat_sekre.home");

    Route::get("/kategori", "KategoriController@index")->name("pusat_sekre.kategori");
    Route::post("/kategori/store", "KategoriController@store")->name("pusat_sekre.kategori.store");
    Route::post("/kategori/update/{id?}", "KategoriController@update")->name("pusat_sekre.kategori.update");
    // Route::delete("/kategori/delete/{id}", "KategoriController@delete")->name("kategori.delete");

    Route::get("/donasi", "DonasiController@index")->name("donasi");
    Route::get("/donasi/detail/{id}", "DonasiController@detail")->name("donasi.detail");
    Route::get("/donasi/edit/{id}", "DonasiController@edit")->name("donasi.edit");
    Route::post("/donasi/update/{id}", "DonasiController@update")->name("donasi.update");

    Route::get("/proposal", "ProposalController@index")->name("proposal");
    Route::get("/proposal/view_cetak_proposal", "ProposalController@view_cetak_proposal")->name("proposal.view_cetak");
    Route::post("/proposal/cetak_by_created", "ProposalController@cetak_by_created");
    Route::get("/proposal/detail/{id}", "ProposalController@detail")->name("proposal");
    Route::get("/proposal/cetak/{id}", "ProposalController@cetak_proposal")->name("proposal.cetak_proposal");
    Route::get("/proposal/print/{id}", "ProposalController@print_proposal")->name("proposal.print_proposal");

    Route::get("/proposal/aktifitas/{id}/detail", "ProposalController@aktifitas_detail")->name("sekre_proposal.aktifitas_detail");
    Route::post("/proposal/aktifitas/update/{id?}", "ProposalController@aktifitas_update")->name("pusat_sekre.aktifitas.update");
});

// 4. korwil
Route::prefix("/wilayah_sekre")->namespace("SekreWilayah")->middleware('gateway:4')->group(function () {
    Route::get("/", "HomeController@index")->name("wilayah_sekre.home");

    Route::get("/kategori", "KategoriController@index")->name("kategori");
    // Route::delete("/kategori/delete/{id}", "KategoriController@delete")->name("kategori.delete");

    Route::get("/proposal", "ProposalController@index")->name("proposal");
    Route::get("/proposal/create", "ProposalController@create")->name("proposal.create");
    Route::get("/proposal/edit/{id}", "ProposalController@edit")->name("proposal.edit");
    Route::get("/proposal/detail/{id}", "ProposalController@detail")->name("proposal.detail");
    Route::get("/proposal/aktifitas/{id}", "ProposalController@display_form_aktifitas")->name("proposal.aktifitas");

    Route::post("/proposal/laporan_aktifitas/{id}", "DetailProposalController@create_laporan_aktifitas")->name("proposal.aktifitas");
    //
    Route::post("/proposal/store", "ProposalController@store")->name("proposal.store");
    Route::post("/proposal/update/{id?}", "ProposalController@update")->name("proposal.update");
    // Route::delete("/proposal/delete/{id}", "ProposalController@delete")->name("proposal.delete");
    Route::get("/proposal/aktifitas/{id}/detail", "ProposalController@aktifitas_detail")->name("proposal.aktifitas_detail");
    Route::get("/proposal/donasi/{id}/detail", "ProposalController@donasi_detail")->name("proposal.donasi_detail");

});

// 5. donatur
Route::prefix("/donatur")->namespace("Donatur")->group(function () {
    Route::get("/profile", "HomeController@profile")->name("donatur.profile");
    Route::get("/dashboard", "HomeController@dashboard")->name("donatur.dashboard");
    Route::get("/pilih_donasi/{id}", "DonasiController@pilih_donasi")->name("donatur.pilih_donasi");
    Route::get("/form_bayar_donasi/{id}", "DonasiController@form_bayar_donasi")->name("donatur.form_bayar_donasi");
    Route::post("/proses_bayar/{id}", "DonasiController@proses_bayar")->name("donatur.proses_bayar");
    Route::get("/cetak_bukti/{id}", "DonasiController@cetak_bukti")->name("donatur.cetak_bukti");
});
