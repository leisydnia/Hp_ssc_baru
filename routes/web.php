<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store');

Route::get('/peminjaman/asset', [AssetController::class, 'index']);
Route::get('/peminjaman/asset2', [AssetController::class, 'index2']);

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/home', [HomeController::class, 'home'])->name('home');



// Route::get('/', function () {
//     return view('home');
// });

// // Route::get('borrowings/{id}', 'BorrowingController@show')->name('show');

// Route::get('/about', function () {
//     return view('about'); // Pastikan view ini sesuai dengan view "about" yang Anda buat.
// })->name('about');

