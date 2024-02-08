<?php

use App\Models\Students;
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

Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->middleware('guest');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/students', [\App\Http\Controllers\StudentController::class, 'index']);
    Route::get('/students/create', [\App\Http\Controllers\StudentController::class, 'create']);
    Route::post('/students/create', [\App\Http\Controllers\StudentController::class, 'store']);
    Route::get('/students/{id}/edit', [\App\Http\Controllers\StudentController::class, 'edit']);
    Route::put('/students/{id}/edit', [\App\Http\Controllers\StudentController::class, 'update']);
    Route::get('/students/{id}/delete', [\App\Http\Controllers\StudentController::class, 'destroy']);

    // dosen
    Route::get('/dosen', [\App\Http\Controllers\DosenController::class, 'index']);
    Route::get('/dosen/create', [\App\Http\Controllers\DosenController::class, 'create']);
    Route::post('/dosen/create', [\App\Http\Controllers\DosenController::class, 'store']);
    Route::get('/dosen/{id}/edit', [\App\Http\Controllers\DosenController::class, 'edit']);
    Route::put('/dosen/{id}/edit', [\App\Http\Controllers\DosenController::class, 'update']);
    Route::get('/dosen/{id}/delete', [\App\Http\Controllers\DosenController::class, 'destroy']);

    // Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
