<?php

use App\Http\Controllers\admin\BahanBakuController;
use App\Http\Controllers\user\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
Route::get('/admin', [LoginController::class,'login'])->name('login');
Route::post('/admin', [LoginController::class,'authenticate'])->name('login');

//REGISTER
Route::get('/register', [RegisterController::class,'create']);
Route::post('/register', [RegisterController::class,'store'])->name('register');

// LOGOUT
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/admin');
})->name('logout')->middleware('auth');
Route::view('/home', 'home')->name('home')->middleware('auth');

// BAGIAN USE
// Beranda
Route::get('/', function () {
    return view('user.home');
});

// Tentang
Route::get('/tentang', function () {
    return view('user.about');
});

// Menu
Route::get('/menu', function () {
    return view('user.menus');
});

// BAGIAN ADMIN
Route::get('/admin/home', function () {
    return view('admin.home');
})->middleware('auth');

// Tentang
Route::get('/admin/tentang', function () {
    return view('admin.about');
})->middleware('auth');

// Menu
Route::get('/admin/menu', function () {
    return view('admin.menus');
})->middleware('auth');

// Lihat Data
Route::get('/bahan_baku', [BahanBakuController::class,'index'])->middleware('auth');

// Tambah Data
Route::get('/bahan_baku/create', function () {
    return view('admin.bahan_baku.create');
})->middleware('auth');

// Simpan Data
Route::post('/bahan_baku/store', [BahanBakuController::class,'store'])->middleware('auth');

// BAGIAN USER ---> REVIEW
Route::prefix('ulasan')->group(function () {
    Route::get('/', [ReviewController::class, 'index']); // Menampilkan daftar ulasan
    Route::get('/create', [ReviewController::class, 'create']); // Menampilkan form ulasan
    Route::post('/store', [ReviewController::class, 'store']); // Menyimpan ulasan baru
});




