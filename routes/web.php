<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(PublicController::class)->group(function(){
    Route::get('/', 'Home')->name('home');
    Route::get('admin','Admin')->name('admin');
    Route::post('admin','AdminLogin')->name('admin.login');
});
require __DIR__.'/AdminRoutes.php';
