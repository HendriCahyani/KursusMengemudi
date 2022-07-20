<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mobilController;
use App\Http\Controllers\pesertaController;
use App\Http\Controllers\instrukturController;

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

route::get('/peserta',[pesertaController::class,'index']);
route::get('/peserta/create',[pesertaController::class,'create']);
route::post('/peserta/store',[pesertaController::class,'store']);
route::get('/peserta/{id}/edit',[pesertaController::class,'edit']);
route::put('/peserta/{id}',[pesertaController::class,'update']);
route::delete('/peserta/{id}',[pesertaController::class,'destroy']);

route::get('/instruktur',[instrukturController::class,'index']);
route::get('/instruktur/create',[instrukturController::class,'create']);
route::post('/instruktur/store',[instrukturController::class,'store']);
route::get('/instruktur/{id}/edit',[instrukturController::class,'edit']);
route::put('/instruktur/{id}',[instrukturController::class,'update']);
route::delete('/instruktur/{id}',[instrukturController::class,'destroy']);

route::get('/mobil',[mobilController::class,'index']);
route::get('/mobil/create',[mobilController::class,'create']);
route::post('/mobil/store',[mobilController::class,'store']);
route::get('/mobil/{id}/edit',[mobilController::class,'edit']);
route::put('/mobil/{id}',[mobilController::class,'update']);
route::delete('/mobil/{id}',[mobilController::class,'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
