<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrphanageController;
use App\Http\Controllers\UserController;
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
Route::group(['prefix' => 'admin'], function () {
    Route::get("/", [AdminController::class ,"index"])->name("admins.home");
    Route::resource("orphanages", OrphanageController::class);
    Route::post("orphanages/bulk_delete", [OrphanageController::class, "multipleDestroy"])->name("orphanages.multipleDestroy");
    
    Route::resource("users", UserController::class);
    Route::post("users/bulk_delete", [UserController::class, "multipleDestroy"])->name("users.multipleDestroy");
});
// Route::group(['middleware' => 'auth'], function () {});

Route::get('/', [PageController::class, "home"])->name("public.home");
Route::get('/about', [PageController::class, "about"])->name("public.about");
Route::get('/search', [PageController::class, "search"])->name("public.search");
Route::get('/contact', [PageController::class, "contact"])->name("public.contact");

Route::get('/orphelinats', [PageController::class, "orphanages"])->name("public.orphanages");
Route::get('/orphelinats/{orphanage_slug}', [PageController::class, "orphanages_detail"])->name("public.orphanages.details");

Route::get('/blog', [PageController::class, "blog"])->name("public.blog");
Route::get('/blog/{blog_slug}', [PageController::class, "blog_detail"])->name("public.blog.details");
