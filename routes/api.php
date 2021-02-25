<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[App\Http\Controllers\ApiMobile\UserController::class, 'login']);
Route::post('register', [App\Http\Controllers\ApiMobile\UserController::class, 'register']);
    Route::get('kategori', [App\Http\Controllers\ApiMobile\KategoriController::class, 'index']);
    Route::get('subkategori-jelajah', [App\Http\Controllers\ApiMobile\SubkategoriController::class, 'subkategori_jelajah']);
    Route::get('subkategori-hiburan', [App\Http\Controllers\ApiMobile\SubkategoriController::class, 'subkategori_hiburan']);

    Route::get('wisata-kuliner', [App\Http\Controllers\ApiMobile\WisataController::class, 'index']);
    Route::get('wisata-kuliner/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl']);

    Route::get('wisata-jelajah', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_jelajah']);
    Route::get('wisata-jelajah/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_jelajah']);
    
    Route::get('wisata-hiburan', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_hiburan']);
    Route::get('wisata-hiburan/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_hiburan']);
    
    Route::get('wisata-belanja', [App\Http\Controllers\ApiMobile\WisataController::class, 'index_belanja']);
    Route::get('wisata-belanja/{id}', [App\Http\Controllers\ApiMobile\WisataController::class, 'dtl_belanja']);
    
    Route::get('transportasi', [App\Http\Controllers\ApiMobile\TransportasiController::class, 'index']);
    Route::get('transportasi/{id}', [App\Http\Controllers\ApiMobile\TransportasiController::class, 'dtl']);
    
    Route::get('info', [App\Http\Controllers\ApiMobile\InfoController::class, 'index']);
    Route::get('info/{id}', [App\Http\Controllers\ApiMobile\InfoController::class, 'dtl']);
    
    Route::get('akomodasi', [App\Http\Controllers\ApiMobile\AkomodasiController::class, 'index']);
    Route::get('akomodasi/{id}', [App\Http\Controllers\ApiMobile\AkomodasiController::class, 'dtl']);

    Route::get('user/detail', [App\Http\Controllers\ApiMobile\UserController::class, 'details']);
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