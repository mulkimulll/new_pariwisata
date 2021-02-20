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

Route::post('login',[App\Http\Controllers\Api\UserController::class, 'login']);
Route::post('register', [App\Http\Controllers\Api\UserController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function(){

    Route::get('kategori', [App\Http\Controllers\Api\KategoriController::class, 'index']);

    Route::get('wisata-kuliner', [App\Http\Controllers\Api\WisataController::class, 'index']);
    Route::get('wisata-kuliner/{id}', [App\Http\Controllers\Api\WisataController::class, 'dtl']);

    Route::get('user/detail', [App\Http\Controllers\Api\UserController::class, 'details']);
    Route::post('logout', [App\Http\Controllers\Api\UserController::class, 'logout']);
}); 

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api) {
    $api->get('test', function() {
        return 1;
   });
   $api->get('kategori', [App\Http\Controllers\Api\KategoriController::class, 'index']);
   
   $api->get('subkategori', [App\Http\Controllers\Api\SubkategoriController::class, 'index']);

   $api->get('wisata', [App\Http\Controllers\Api\WisataController::class, 'index']);
});