<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\KategoriController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.das');
Route::get('/admin/produk', [ProdukController::class, 'index'])->name('admin.produk.index');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/admin/produk', [ProdukController::class, 'index'])->name('admin.produk');
Route::get('/admin/produk/tambah', [ProdukController::class, 'create'])->name('admin.produk.create');
Route::post('/admin/produk/tambah', [ProdukController::class, 'store'])->name('admin.produk.store');
Route::get('/admin/produk/{id}/edit', [ProdukController::class, 'edit'])->name('admin.produk.edit');
Route::put('/admin/produk/{id}', [ProdukController::class, 'update'])->name('admin.produk.update');
Route::delete('/admin/produk/{id}', [ProdukController::class, 'delete'])->name('admin.produk.delete');

Route::get('/admin/toko/edit', [TokoController::class, 'edit'])->name('admin.toko.edit');
Route::post('/admin/toko/edit', [TokoController::class, 'update'])->name('admin.toko.update');
Route::get('/admin/toko', [App\Http\Controllers\Admin\TokoController::class, 'index'])->name('admin.toko.index');

// Halaman list toko
Route::get('/admin/toko', [TokoController::class, 'index'])->name('admin.toko.index');

// Halaman tambah toko
Route::get('/admin/toko/tambah', [TokoController::class, 'create'])->name('admin.toko.tambah');

// Proses simpan toko
Route::post('/admin/toko/store', [TokoController::class, 'store'])->name('admin.toko.store');
// Halaman Edit
Route::get('/admin/toko/edit/{id}', [TokoController::class, 'edit'])->name('admin.toko.edit');

// Proses Update
Route::post('/admin/toko/update/{id}', [TokoController::class, 'update'])->name('admin.toko.update');

// Hapus
Route::get('/admin/toko/hapus/{id}', [TokoController::class, 'destroy'])->name('admin.toko.hapus');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.das.index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('admin/toko')->name('admin.toko.')->group(function () {
    Route::get('/', [TokoController::class, 'index'])->name('index');
    Route::get('/create', [TokoController::class, 'create'])->name('create');
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.create');
    Route::get('/kategori/tambah', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');

});











