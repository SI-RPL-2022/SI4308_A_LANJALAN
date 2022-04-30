<?php

use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\BundleController;
use App\Models\wisata;
use App\Http\Controllers\PemesananController;


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

// Route::get('/', function () {return view('landing', ["title" => "Lanjalan", "wisatas" => wisata::paginate(4)->withQueryString() ]);});
Route::get('/login', function () {return view('login', ["title" => "Log In"]);});
Route::get('/', [AuthController::class, 'landing'])->name('landing');

//admin -> wisata
Route::get('/dashboard', [WisataController::class, 'dashboard']);
Route::get('/wisatapost', [WisataController::class, 'wisatapost']);
Route::get('/detailwisata/{id}', [WisataController::class, 'wisatadetail']);
Route::get('/wisatapost/{id}', [WisataController::class, 'deletewisata'])->name('deletewisata');
Route::resource('wisatas', WisataController::class);

//admin -> travel agent
Route::get('/travelpost', [TravelController::class, 'travelpost']);
Route::get('/detailtravel/{id}', [TravelController::class, 'traveldetail']);
Route::get('/travelpost/{id}', [TravelController::class, 'deletetravelpost'])->name('deletetravelpost');
Route::get('/travelpost/{id}/{email}', [TravelController::class, 'deletetravelpost'])->name('deletetravelpost');
Route::resource('travels', TravelController::class);

//login -> admin
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

//travel agent
Route::resource('bundles', BundleController::class);

//pemesanan
Route::get('/pesan/{id}', [PemesananController::class, 'show'])->name('pesan');
Route::resource('pemesanan', PemesananController::class); //pesan Wisata dan update 
Route::get('/konfirmasi/{id}', [PemesananController::class, 'konfirmasi'])->name('konfirmasi');
Route::get('/riwayatpesanan', [PemesananController::class, 'riwayatpesanan']);
Route::get('/pesanBundle/{id}', [PemesananController::class, 'showBundle'])->name('showBundle'); //show pesan bundle
Route::post('/pesanBundle/{id}', PemesananController::class, 'showBundle'); //post



//user
Route::get('/wisatadetail/{id}', [WisataController::class, 'wisatadetailuser']);
Route::get('/bundleuser/{id}', [BundleController::class, 'bundleuser']);



// Route::get('/pesan/pemesanan', 'PemesananController@pemesanan');
// Route::post('/pesan/pemesanan', 'PemesananController@postpemesanan');

// Route::get('/pesan/konfirmasi', 'PemesananController@konfirmasi');
// Route::post('/pesan/konfirmasi', 'PemesananController@postkonfirmasi');
// Route::post('/pesan/remove-image', 'PemesananController@removeImage');

// Route::get('/pesan/create-step3', 'PemesananController@createStep3');
// Route::post('/pesan/store', 'PemesananController@store');