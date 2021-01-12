// 5. donatur
Route::prefix("/donatur")->namespace("Danotur")->middleware('gateway:5')->group(function () {
    Route::get("/", "HomeController@index")->name("donatur.home");
});
