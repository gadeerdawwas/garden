<?php

use App\Http\Controllers\SiteController;
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

// Route::get('/', function () {
//     return view('site.include.layout');
// });

Route::get('/',[SiteController::class ,'index'])->name('home');
Route::get('about',[SiteController::class ,'about'])->name('about');
Route::get('minneapolis',[SiteController::class ,'minneapolis'])->name('minneapolis');


Route::get('services',[SiteController::class ,'services'])->name('services');
Route::get('lawn_mowing_lawn_care',[SiteController::class ,'lawn_mowing_lawn_care'])->name('lawn_mowing_lawn_care');
Route::get('commercial_lawn_service',[SiteController::class ,'commercial_lawn_service'])->name('commercial_lawn_service');
Route::get('snow_removal',[SiteController::class ,'snow_removal'])->name('snow_removal');
Route::get('lawn_maintenance',[SiteController::class ,'lawn_maintenance'])->name('lawn_maintenance');
Route::get('yard_trimming_and_blowing',[SiteController::class ,'yard_trimming_and_blowing'])->name('yard_trimming_and_blowing');
Route::get('spring_and_fall_cleanup',[SiteController::class ,'spring_and_fall_cleanup'])->name('spring_and_fall_cleanup');
Route::get('dethatching',[SiteController::class ,'dethatching'])->name('dethatching');
Route::get('yard_aeration',[SiteController::class ,'yard_aeration'])->name('yard_aeration');
Route::get('hedge_trimming',[SiteController::class ,'hedge_trimming'])->name('hedge_trimming');
Route::get('mulching_garden_maintenance_planting',[SiteController::class ,'mulching_garden_maintenance_planting'])->name('mulching_garden_maintenance_planting');
Route::get('snow_plowing',[SiteController::class ,'snow_plowing'])->name('snow_plowing');
Route::get('contact_us',[SiteController::class ,'contact_us'])->name('contact_us');
