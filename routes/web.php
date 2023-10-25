<?php

use App\Http\Controllers\EventosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/eventos', function() {
    return view('cadastro');
});

Route::get('/User', [UsuariosController::class,'index']);

Route::post('/eventos', [EventosController::class,'criarEventos']);

