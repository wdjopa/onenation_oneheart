<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonationController;
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
Route::group(['prefix' => 'admin', 'middleware' => ["auth"]], function () {
    Route::get("/", [AdminController::class, "index"])->name("admins.home");
    Route::resource("orphanages", OrphanageController::class);
    Route::post("orphanages/bulk_delete", [OrphanageController::class, "multipleDestroy"])->name("orphanages.multipleDestroy");

    Route::resource("donations", DonationController::class);
    Route::post("donations/update_status", [DonationController::class, "update_status"])->name("donations.update_status");
    Route::post("donations/bulk_delete", [DonationController::class, "multipleDestroy"])->name("donations.multipleDestroy");

    Route::resource("users", UserController::class);
    Route::post("users/bulk_delete", [UserController::class, "multipleDestroy"])->name("users.multipleDestroy");

    Route::resource("blogs", BlogController::class);
    Route::post("blogs/bulk_delete", [BlogController::class, "multipleDestroy"])->name("blogs.multipleDestroy");

    Route::resource("cities", CityController::class);
    Route::post("cities/bulk_delete", [CityController::class, "multipleDestroy"])->name("cities.multipleDestroy");

});
// Route::group(['middleware' => 'auth'], function () {});

Route::get('/', [PageController::class, "home"])->name("public.home");
Route::get('/about', [PageController::class, "about"])->name("public.about");
Route::get('/search', [PageController::class, "search"])->name("public.search");
Route::get('/contact', [PageController::class, "contact"])->name("public.contact");
Route::get('/joinus', [PageController::class, "joinus"])->name("public.joinus");
Route::post('/joinus', [PageController::class, "joinus_register"])->name("public.joinus.register");

Route::get('/orphelinats', [PageController::class, "orphanages"])->name("public.orphanages");
Route::get('/orphelinats/{orphanage_slug}', [PageController::class, "orphanages_detail"])->name("public.orphanages.details");

Route::get('/blog', [PageController::class, "blog"])->name("public.blog");
Route::get('/blog/{blog_slug}', [PageController::class, "blog_detail"])->name("public.blog.details");

Route::post('/donation', [DonationController::class, "store"])->name("public.donation");

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
