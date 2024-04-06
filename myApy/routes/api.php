<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
| arquivo de registro de rotas
*/
Route::get('bands', 'BandController@getAll');
Route::post('bands/store', 'BandController@store');
Route::get('bands/gender/{gender}', 'BandController@getBandsByGender');
Route::get('bands/{id}', 'BandController@getById');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
