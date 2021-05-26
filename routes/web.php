<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrphanageController;
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
Route::group(['prefix' => 'admin'], function () {
    Route::get("/", [AdminController::class ,"index"])->name("admins.home");
    Route::resource("orphanages", OrphanageController::class);
    Route::post("orphanages/bulk_delete", [OrphanageController::class, "multipleDestroy"])->name("orphanages.multipleDestroy");
});
// Route::group(['middleware' => 'auth'], function () {});

Route::get('/', function () {
    return view('welcome');
});
