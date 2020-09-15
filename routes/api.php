<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController; 

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
// });

    Route::get('/players', [PlayerController::class, 'index']);
    Route::get('/players/{id}', [PlayerController::class, 'show']);
    Route::post('/players', [PlayerController::class, 'store']);
    Route::post('/players/{id}/answers', [PlayerController::class, 'answer']);
    Route::delete('/players/{id}', [PlayerController::class, 'delete']);
    Route::delete('/players/{id}/answers', [PlayerController::class, 'resetAnswers']);