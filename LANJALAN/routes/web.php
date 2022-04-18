<?php

use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TravelController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard\dash');
//     });

Route::get('/', function () {return view('landing', ["title" => "Lanjalan"]);});
Route::get('/login', function () {return view('login', ["title" => "Log In"]);});
Route::get('/', [AuthController::class, 'landing'])->name('landing');

//admin -> wisata
Route::get('/dashboard', [WisataController::class, 'dashboard']);
Route::get('/wisatapost', [WisataController::class, 'wisatapost']);
Route::get('/detailwisata/{id}', [WisataController::class, 'wisatadetail']);
Route::get('/wisatapost/{id}', [WisataController::class, 'deletewisata'])->name('deletewisata');

//admin -> travel agent
Route::get('/travelpost', [TravelController::class, 'travelpost']);
Route::get('/detailtravel/{id}', [TravelController::class, 'traveldetail']);
Route::get('/travelpost/{id}', [TravelController::class, 'deletetravelpost'])->name('deletetravelpost');



Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
// Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:editor']], function () {
        Route::resource('editor', AdminController::class);
    });
});

Route::resource('wisatas', WisataController::class);
