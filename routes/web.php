<?php

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

// routes/web.php

Route::get('borrowings/{id}', 'BorrowingController@show')->name('show');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/about', function () {
    return view('about'); // Pastikan view ini sesuai dengan view "about" yang Anda buat.
})->name('about');

Route::get('/', function () {
    return view('home');
});
