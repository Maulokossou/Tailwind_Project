<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::controller(PageController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get("/page1", "page1")->name("page1");
    Route::get("/page2", "page2")->name("page2");
    Route::get("/page3", "page3")->name("page3");
    Route::get("/page4", "page4")->name("page4");
});