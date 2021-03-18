<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[App\Http\Controllers\ApiMobile\UserController::class, 'login']);
Route::post('register', [App\Http\Controllers\ApiMobile\UserController::class, 'register']);
    Route::get('kategori', [App\Http\Controllers\ApiMobile\KategoriController::class, 'index']);
    Route::get('subkategori-jelajah', [App\Http\Controllers\ApiMobile\SubkategoriController::class, 'subkategori_jelajah']);
    Route::get('subkategori-hiburan', [App\Http\Controllers\ApiMobile\SubkategoriController::class, 'subkategori_hiburan']);

    Route::get('wisata-jelajah', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_jelajah']);
    Route::get('wisata-jelajah/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_wisata_jelajah']);
    // kategori jelajah
    Route::get('wisata-pendakian', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_pendakian']);
    Route::get('wisata-hutan', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_hutan']);
    Route::get('wisata-pantai', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_pantai']);
    Route::get('wisata-lembah', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_lembah']);
    // detail wisata jelajah
    Route::get('wisata-pendakian/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_pendakian']);
    Route::get('wisata-hutan/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_hutan']);
    Route::get('wisata-pantai/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_pantai']);
    Route::get('wisata-lembah/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_lembah']);
    // kategori kuliner
    Route::get('wisata-kuliner', [App\Http\Controllers\ApiMobile\WisataController::class, 'kuliner']);
    Route::get('wisata-kuliner/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_kuliner']);
    // kategori hiburan
    Route::get('wisata-hiburan', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_hiburan']);
    Route::get('wisata-hiburan/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_hiburan']);
    Route::get('wisata-bioskop', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_bioskop']);
    Route::get('wisata-bermain', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_bermain']);
    Route::get('wisata-zoo', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_zoo']);
    // detail wisata hiburan
    Route::get('wisata-bioskop/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_bioskop']);
    Route::get('wisata-bermain/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_bermain']);
    Route::get('wisata-zoo/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_zoo']);
    // kategori belanja
    Route::get('wisata-belanja', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_belanja']);
    Route::get('wisata-belanja/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_belanja']);
    // budaya
    Route::get('budaya', [App\Http\Controllers\ApiMobile\BudayaController::class, 'index_budaya']);
    // dtl budaya
    Route::get('budaya/{id}', [App\Http\Controllers\ApiMobile\BudayaController::class, 'dtl_budaya']);

    Route::get('transportasi', [App\Http\Controllers\ApiMobile\TransportasiController::class, 'index']);
    Route::get('transportasi/{id}', [App\Http\Controllers\ApiMobile\TransportasiController::class, 'dtl']);
    
    Route::get('info', [App\Http\Controllers\ApiMobile\InfoController::class, 'index']);
    Route::get('info/{id}', [App\Http\Controllers\ApiMobile\InfoController::class, 'dtl']);
    
    Route::get('akomodasi', [App\Http\Controllers\ApiMobile\AkomodasiController::class, 'index']);
    Route::get('akomodasi/{id}', [App\Http\Controllers\ApiMobile\AkomodasiController::class, 'dtl']);

    Route::get('user/detail', [App\Http\Controllers\ApiMobile\UserController::class, 'details']);

    // booking
    Route::get('/get-booking-history/{id}', [App\Http\Controllers\ApiMobile\BokingController::class, 'history']);
    Route::post('/booking/{id}', [App\Http\Controllers\ApiMobile\BokingController::class, 'index']);
    Route::get('/get-notif/{id}', [App\Http\Controllers\ApiMobile\BokingController::class, 'notif']);

    Route::post('/send-tokenid', [App\Http\Controllers\ApiMobile\UserController::class, 'send_tokenid']);

    Route::post('logout', [App\Http\Controllers\ApiMobile\UserController::class, 'logout']);


$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api) {
    $api->get('test', function() {
        return 1;
   });
   $api->get('kategori', [App\Http\Controllers\ApiMobile\KategoriController::class, 'index']);
   
   $api->get('subkategori', [App\Http\Controllers\ApiMobile\SubkategoriController::class, 'index']);

   $api->get('wisata', [App\Http\Controllers\ApiMobile\WisataController::class, 'index']);
});