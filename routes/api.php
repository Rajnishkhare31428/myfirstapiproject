<?php

use App\Http\Controllers\bookController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::resource('book', 'App\Http\Controllers\bookController');

Route::get('/', 
[App\Http\Controllers\bookController::class, 'index'
]);

Route::get('/{id}', 
[App\Http\Controllers\bookController::class, 'show'
]);

Route::post('/', 
[App\Http\Controllers\bookController::class, 'store'
]);
Route::put('/{id}', 
[App\Http\Controllers\bookController::class, 'update'
]);
Route::delete('/{id}', 
[App\Http\Controllers\bookController::class, 'destroy'
]);

// Route::post('');
// Route::put('');
// Route::delete('');