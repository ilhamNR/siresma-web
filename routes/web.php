<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\NewsController;
use App\Http\Controllers\Public\TentangController;
use App\Http\Controllers\Public\AplikasiController;
use App\Http\Controllers\Public\VisionController;
use App\Http\Controllers\Public\FacilityController;
use App\Http\Controllers\Public\StatisticController;
use App\Http\Controllers\Public\ContactController;

use App\Http\Controllers\Admin\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('public.home');
Route::get('/bar-chart', 'ChartController@index');
Route::get('/chart', 'ChartController@index');
Route::get('visi-misi', [VisionController::class, 'index'])->name('public.visionMission');
Route::prefix('berita')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('public.newsIndex');
});
Route::prefix('tentang')->group(function () {
    Route::get('/', [TentangController::class, 'index'])->name('public.tentangIndex');
});
Route::prefix('aplikasi')->group(function () {
    Route::get('/', [AplikasiController::class, 'index'])->name('public.aplikasiIndex');
});
Route::prefix('data')->group(function () {
    Route::get('timbunan-sampah', [StatisticController::class, 'landfillData'])->name('public.landfillData');
    Route::get('komposisi-sampah', [StatisticController::class, 'wasteComposition'])->name('public.wasteComposition');
});

Route::prefix('fasilitas')->group(function () {
    Route::get('bank-sampah', [FacilityController::class, 'trashBank'])->name('public.trashBank');
    Route::get('tps3r', [FacilityController::class, 'tps3r'])->name('public.tps3r');
});

Route::get('contact-us',[ContactController::class, 'index'])->name('public.contactUs');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::prefix('/users')->group(function(){
            Route::get('nasabah', [UserController::class, 'indexNasabah'])->name('admin.nasabah');
        });
    });

});
