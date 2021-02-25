<?php

use App\Models\Owner;
use Doctrine\DBAL\Driver\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;

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


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, "index"]);

Route::get("/login", [HomeController::class, "login"]);

Route::get('/logout', [LoginController::class, "logout"]);

Route::group(["prefix" => "owners"], function () {
    
    Route::get("/", [OwnerController::class, "index"]);
     
    Route::group(["middleware" => "auth"], function () {
        
        Route::get("form", [OwnerController::class, "create"]);
        
        Route::post("form", [OwnerController::class, "createPost"]);
        
        Route::post("update/{owner}", [OwnerController::class, "updateOwner"]);
    });
    
    Route::get("{owner}", [OwnerController::class, "show"]);
});


Auth::routes(["register" => false]);

