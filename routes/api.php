<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'auth',
    'name' => 'user.',
], function () {
    Route::post('login', 'App\Http\Controllers\AuthController@login')->name('login');
    Route::post('registration', 'App\Http\Controllers\AuthController@registration')->name('registration');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
});

Route::resources([
    'dealers' => \App\Http\Controllers\DealerController::class,
    'goods' => \App\Http\Controllers\GoodController::class,
]);

Route::get('/', function () {
    return 1;
});
