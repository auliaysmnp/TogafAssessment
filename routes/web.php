<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\InputController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home', [
        "title" => "Enterprise Architecture Maturity Assessment"
    ]);
});

Route::get('/home', function () {
    return view('page.home', [
        "title" => "Enterprise Architecture Maturity Assessment"
    ]);
});

Route::get('/input', function () {
    return view('page.input', [
        "title" => "Input Enterprise Architecture Maturity Assessment"
    ]);
});

Route::get('/datatabel', function () {
    return view('page.datatabel', [
        "title" => "Data Tabel Enterprise Architecture Maturity Assessment"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route::post('/tabel_element', [DataController::class, 'show'])->name('tabel_element');
// Route::post('/tabel_user', [DataController::class, 'show'])->name('tabel_user');
// Route::post('/tabel_value', [DataController::class, 'show'])->name('tabel_value');

Route::post('/{page?}', [DataController::class, 'show'])->name('show_data');

Route::get('/input', [InputController::class, 'show'])->name('input_show');


// Route::resource('/datatabel', AdminController::class)->except('show')->middleware('admin');