<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'show'])->name('home');


Route::prefix('lecturer')->group(function (){
    Route::post('/getState', [UserController::class, 'getState']);
    Route::get('/createView', [UserController::class, 'createView']);
    Route::post('/createProcedure', [UserController::class, 'create']);
    Route::get('/show', [UserController::class, 'show']);
});
