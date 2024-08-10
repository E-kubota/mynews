<?php

use App\Http\Controllers\Admin\SelfProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(NewsController::class)->prefix('admin')->name('new.')->group(function() {
    Route::get('news/create', 'add')->name('add');
});

Route::controller(SelfProfileController::class)->prefix('admin')->name('profile.')->group(function() {
    Route::get('profile/create', 'add')->name('add');
    Route::get('profile/edit', 'edit')->name('edit');
});

// 単純な書き方の場合
// Route::get('admin/news/create', [NewsController::class, 'add']);
