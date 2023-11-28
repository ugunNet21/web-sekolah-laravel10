<?php

use App\Http\Controllers\Admin\AdmGalleryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





Route::get('/', [HomeController::class, 'index'])
    ->name('home');
Route::get('/sejarah/', [HomeController::class, 'sejarah'])
    ->name('sejarah');
Route::get('/visimisi/', [HomeController::class, 'visimisi'])
    ->name('visimisi');
Route::get('/gallery/', [HomeController::class, 'gallery'])
    ->name('gallery.index');

Route::get('/gallery/', [GalleryController::class, 'index'])
    ->name('admin.gallery.index');


Route::group(
    [
        'prefix' => '/admin',
        'middleware' => ['auth', 'admin']
    ],
    function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::get('/gallery', [GalleryController::class, 'index'])
            ->name('admin.gallery.index');
        Route::resource('/gallery', GalleryController::class);
    }
);

Auth::routes();
