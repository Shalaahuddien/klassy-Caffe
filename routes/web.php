<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get("/viewreservation",     [AdminController::class,"viewreservation"]);
Route::get("/deletemenu/{id}",     [AdminController::class,"deletemenu"]);
Route::get("/deleteuser/{id}",     [AdminController::class,"deleteuser"]);
Route::get("/updateview/{id}",     [AdminController::class,"updateview"]);
Route::get("/updatechef/{id}",     [AdminController::class,"updatechef"]);
Route::get("/deletechef/{id}",     [AdminController::class,"deletechef"]);
Route::get("/redirects",           [HomeController::class,"redirects"]);
Route::get("/foodmenu",            [AdminController::class,"foodmenu"]);
Route::get("/viewchef",            [AdminController::class,"viewchef"]);
Route::get("/users",               [AdminController::class,"user"]);
Route::get("/",                    [HomeController::class,"index"]);
Route::post("/uploadfood",         [AdminController::class,"upload"]);
Route::post("/orderconfirm",         [HomeController::class,"orderconfirm"]);
Route::post("/update/{id}",        [AdminController::class,"update"]);
Route::post("/addcart/{id}",       [HomeController::class,"addcart"]);
Route::get("/showcart/{id}",       [HomeController::class,"showcart"]);
Route::get("/remove/{id}",       [HomeController::class,"remove"]);
Route::get("/orders",       [AdminController::class,"orders"]);
Route::get("/search",       [AdminController::class,"search"]);
Route::post("/uploadchef",         [AdminController::class,"uploadchef"]);
Route::post("/reservation",        [AdminController::class,"reservation"]);
Route::post("/updatefoodchef/{id}",[AdminController::class,"updatefoodchef"]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');