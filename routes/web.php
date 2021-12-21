<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CategoryController;

use Illuminate\Http\Request;

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

Route::get('/tes', function () {
    return view('user.tes');
});





Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function (){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/dashboard', [UserController::class, 'index']);

    Route::get('/tambah-data-artikel', [ArtikelController::class, 'tambahArtikel'])->name('tambahArtikel');
    Route::post('/dashboard', [ArtikelController::class, 'store'])->name('postArtikel');
    Route::get('/dashboard', [ArtikelController::class, 'index']);
    Route::get('/edit-artikel/{id}', [ArtikelController::class, 'edit']);
    Route::patch('/update-artikel/{id}', [ArtikelController::class, 'update']);
    Route::get('/delete-artikel/{id}', [ArtikelController::class, 'destroy']);

    Route::get('/category', [CategoryController:: class, 'index'])->name('category');
    Route::get('/tambah-kategori', [CategoryController::class, 'createCategory'])->name('tambahKategori');
    Route::post('/category', [CategoryController::class, 'store'])->name('postCategory');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('editCategory');
    Route::patch('/update-category/{id}', [CategoryController::class, 'update'])->name('updateCategory');

     Route::get('/dataUser', [UserController::class, 'user'])->name('dataUser');
     Route::get('/dataUser/export_excel', [UserController::class, 'index'])->name('export_excel');

});

Route::get('/', [App\Http\Controllers\ArtikelController::class, 'view'])->name('artikel');
Route::get('/{id}', [App\Http\Controllers\ArtikelController::class, 'show']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
