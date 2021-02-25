<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori-ubah/{id}', [App\Http\Controllers\KategoriController::class, 'edit'])->name('ubahK');
    Route::get('kategori-hapus/{id}', [App\Http\Controllers\KategoriController::class, 'destroy']);
    Route::post('/create-kat', [App\Http\Controllers\KategoriController::class, 'create'])->name('createK');
    Route::post('/kat-ubah-proses/{id}', [App\Http\Controllers\KategoriController::class, 'editproses']);
    
    Route::get('/subkategori', [App\Http\Controllers\SubkategoriController::class, 'index'])->name('subkategori');
    Route::get('/subkategori-ubah/{id}', [App\Http\Controllers\SubkategoriController::class, 'edit']);
    Route::get('subkategori-hapus/{id}', [App\Http\Controllers\SubkategoriController::class, 'destroy']);
    Route::post('/subkategori-ubah-proses/{id}', [App\Http\Controllers\SubkategoriController::class, 'editproses']);
    Route::post('/create-subkat', [App\Http\Controllers\SubkategoriController::class, 'create'])->name('createSK');

    Route::get('/kat-transportasi', [App\Http\Controllers\JenistransportasiController::class, 'index'])->name('kat-trans');
    Route::post('/create-kategori-transportasi', [App\Http\Controllers\JenistransportasiController::class, 'create'])->name('createjenis');

    // Route::get('/kategori-dropdown/{id}', [App\Http\Controllers\WisataController::class, 'getCategory'])->name('getkategori');

    Route::get('/wisata-jelajah', [App\Http\Controllers\WisataController::class, 'index_jelajah'])->name('wisata-jelajah');
    Route::post('/create-wisata-jelajah', [App\Http\Controllers\WisataController::class, 'create_jelajah'])->name('create_jelajah');
    Route::get('/wisata-jelajah-dtl/{id}', [App\Http\Controllers\WisataController::class, 'dtl_jelajah']);
    Route::get('/wisata-jelajah-updt/{id}', [App\Http\Controllers\WisataController::class, 'update_jelajah']);
    Route::match(['get','post'],'/wisata-jelajah-update-proses/{id}', [App\Http\Controllers\WisataController::class, 'update_jelajah_proses'])->name('update_jelajah_proses');
    Route::get('wisata-jelajah-del/{id}', [App\Http\Controllers\WisataController::class, 'destroy_jelajah']);

    Route::get('/wisata-kuliner', [App\Http\Controllers\WisataController::class, 'index_kuliner'])->name('wisata-kuliner');
    Route::post('/create-wisata-kuliner', [App\Http\Controllers\WisataController::class, 'create_kuliner'])->name('create_kuliner');
    Route::get('/wisata-kuliner-dtl/{id}', [App\Http\Controllers\WisataController::class, 'dtl_kuliner']);
    Route::get('/wisata-kuliner-updt/{id}', [App\Http\Controllers\WisataController::class, 'update_kuliner']);
    Route::match(['get','post'],'/wisata-kuliner-update-proses/{id}', [App\Http\Controllers\WisataController::class, 'update_kuliner_proses'])->name('update_kuliner_proses');
    Route::get('wisata-kuliner-del/{id}', [App\Http\Controllers\WisataController::class, 'destroy_kuliner']);

    Route::get('/wisata-hiburan', [App\Http\Controllers\WisataController::class, 'index_hiburan'])->name('wisata-hiburan');
    Route::post('/create-wisata-hiburan', [App\Http\Controllers\WisataController::class, 'create_hiburan'])->name('create_hiburan');
    Route::get('/wisata-hiburan-dtl/{id}', [App\Http\Controllers\WisataController::class, 'dtl_hiburan']);
    Route::get('/wisata-hiburan-updt/{id}', [App\Http\Controllers\WisataController::class, 'update_hiburan']);
    Route::match(['get','post'],'/wisata-hiburan-update-proses/{id}', [App\Http\Controllers\WisataController::class, 'update_hiburan_proses'])->name('update_hiburan_proses');
    Route::get('wisata-hiburan-del/{id}', [App\Http\Controllers\WisataController::class, 'destroy_hiburan']);
    
    Route::get('/wisata-belanja', [App\Http\Controllers\WisataController::class, 'index_belanja'])->name('wisata-belanja');
    Route::post('/create-wisata-belanja', [App\Http\Controllers\WisataController::class, 'create_belanja'])->name('create_belanja');
    Route::get('/wisata-belanja-dtl/{id}', [App\Http\Controllers\WisataController::class, 'dtl_belanja']);
    Route::get('/wisata-belanja-updt/{id}', [App\Http\Controllers\WisataController::class, 'update_belanja']);
    Route::match(['get','post'],'/wisata-belanja-update-proses/{id}', [App\Http\Controllers\WisataController::class, 'update_belanja_proses'])->name('update_belanja_proses');
    Route::get('wisata-belanja-del/{id}', [App\Http\Controllers\WisataController::class, 'destroy_belanja']);

    Route::get('/transportasi', [App\Http\Controllers\TransportasiController::class, 'index'])->name('trans');
    Route::get('/trans-dtl/{id}', [App\Http\Controllers\TransportasiController::class, 'dtl']);
    Route::get('/trans-updt/{id}', [App\Http\Controllers\TransportasiController::class, 'update']);
    Route::get('/trans-del/{id}', [App\Http\Controllers\TransportasiController::class, 'destroy']);
    Route::post('/trans-update-proses/{id}', [App\Http\Controllers\TransportasiController::class, 'updateT']);
    Route::post('/create-transport', [App\Http\Controllers\TransportasiController::class, 'create'])->name('createT');

    Route::get('/info', [App\Http\Controllers\InfoController::class, 'index'])->name('info');
    // Route::get('/trans-dtl/{id}', [App\Http\Controllers\TransportasiController::class, 'dtl']);
    Route::get('/info-updt/{id}', [App\Http\Controllers\InfoController::class, 'update']);
    Route::get('/info-del/{id}', [App\Http\Controllers\InfoController::class, 'destroy']);
    Route::post('/info-update-proses/{id}', [App\Http\Controllers\InfoController::class, 'updateinfo']);
    Route::post('/create-info', [App\Http\Controllers\InfoController::class, 'create'])->name('create-info');
    
    Route::get('/akomodasi', [App\Http\Controllers\AkomodasiController::class, 'index'])->name('akomodasi');
    Route::get('/akomodasi-dtl/{id}', [App\Http\Controllers\AkomodasiController::class, 'dtl']);
    Route::get('/akomodasi-updt/{id}', [App\Http\Controllers\AkomodasiController::class, 'update']);
    Route::get('/akomodasi-del/{id}', [App\Http\Controllers\AkomodasiController::class, 'destroy']);
    Route::post('/akomodasi-update-proses/{id}', [App\Http\Controllers\AkomodasiController::class, 'updateproses']);
    Route::post('/create-akomodasi', [App\Http\Controllers\AkomodasiController::class, 'create'])->name('create-akomodasi');

    Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('event');
    // Route::get('/akomodasi-dtl/{id}', [App\Http\Controllers\AkomodasiController::class, 'dtl']);
    // Route::get('/akomodasi-updt/{id}', [App\Http\Controllers\AkomodasiController::class, 'update']);
    Route::get('/event-del/{id}', [App\Http\Controllers\EventController::class, 'destroy']);
    // Route::post('/akomodasi-update-proses/{id}', [App\Http\Controllers\AkomodasiController::class, 'updateproses']);
    Route::post('/create-event', [App\Http\Controllers\EventController::class, 'create'])->name('createE');
    Route::get('/event-ayo', [App\Http\Controllers\EventController::class, 'index_user']);

    Route::get("auto-complete",  [App\Http\Controllers\GoogleController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
