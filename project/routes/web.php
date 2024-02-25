<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CatagoryController;;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\ContectController;

use Illuminate\Support\Facades\Route;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// HomeController
Route::get('/input', [HomeController::class, 'index'])->name('content.input')->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/list', [HomeController::class, 'list'])->name('content.list')->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/das', [HomeController::class, 'das'])->name('content.list');

Route::get('/', [HomeController::class, 'test'])->name('content.list');
Route::get('/setting', [HomeController::class, 'setting'])->name('content.list');
Route::get('/setting/list', [HomeController::class, 'show'])->name('content.list');
Route::get('/catagory', [HomeController::class, 'catagory'])->name('content.list');
Route::get('/catagory/list', [HomeController::class, 'catagorylist'])->name('content.list');
Route::get('/view', [HomeController::class, 'view'])->name('content.list');
Route::get('/contect', [HomeController::class, 'contect'])->name('content.list');
Route::get('/single/{id?}', [HomeController::class, 'single'])->name('content.list');
Route::get('/contect/list', [HomeController::class, 'con'])->name('content.list');
Route::get('/blog', [HomeController::class, 'blog'])->name('content.list');
Route::get('/details/{id?}', [HomeController::class, 'details'])->name('content.list');
Route::get('/blogcatagory/{id?}', [HomeController::class, 'catagoryblog'])->name('content.list');

// ContentController
Route::post('/in', [ContentController::class, 'store'])->name('content.store');
Route::get('/home', [ContentController::class, 'show'])->name('content.show');
Route::get('/delete/{id?}', [ContentController::class, 'delete'])->name('content.delete');
Route::get('/update/{id?}', [ContentController::class, 'update'])->name('content.update');
Route::post('/upload/{id?}', [ContentController::class, 'out'])->name('content.out');


// AdminController
Route::get('/admin', [Admincontroller::class, 'index'])->name('content.show');


// SettingController

Route::post('/store', [SettingController::class, 'store'])->name('content.show');
Route::get('/setting/delete/{id?}', [SettingController::class, 'delete'])->name('content.show');
Route::get('/setting/edit/{id?}', [SettingController::class, 'edit'])->name('content.show');
Route::post('/setting/update/{id?}', [SettingController::class, 'update'])->name('content.show');


// CatagoryController
Route::post('/catagory', [CatagoryController::class, 'index'])->name('content.show');
Route::post('/catagory/update/{id?}', [CatagoryController::class, 'update'])->name('content.show');
Route::get('/catagory/edit/{id?}', [CatagoryController::class, 'edit'])->name('content.show');
Route::get('/catagory/delete/{id?}', [CatagoryController::class, 'delete'])->name('content.show');



// ContectController
Route::post('/contect/data', [ContectController::class, 'index'])->name('content.show');
Route::get('/contect/delete/{id?}', [ContectController::class, 'delete'])->name('content.show');
