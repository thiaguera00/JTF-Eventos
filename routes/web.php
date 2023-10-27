<?php

use App\Http\Controllers\AcessoAoSistemaController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\FeedbackController;
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

Route::get('/', [EventosController::class,'listarEventos']
)->name('eventos');

Route::get('/cadastrarEvento', function () {
    return view('cadastroEventos');
})->name('cadastrarEvento');

Route::get('/cadastro', function () {
    return view('cadastroUsuarios');
})->name('cadastro');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/editaEvento', function () {
    return view('editaEvento');
})->name('editaEvento');

Route::get('/feedback', function () {
    return view('criarFeed');
})->name('feedback');

Route::post('/User', [UsuariosController::class,'cadastroUsuario'])->name('cadastroUsuario');

Route::post('/criarFeed', [FeedbackController::class,'criarFeedback'])->name('criarFeedback');

Route::post('/eventos', [EventosController::class,'criarEventos'])->name('criarEventos');

Route::get('/eventos/{id}', [EventosController::class,'visualizarEvento'])->name('detalhes.eventos');

Route::post('/eventos/editar/{id}', [EventosController::class, 'editarEvento'])->name('editarEvento.post');

Route::post('/eventos/excluir/{id}', [EventosController::class, 'excluirEvento'])->name('excluir.eventos');

Route::post('/acesso', [AcessoAoSistemaController::class, 'login'])->name('acessoSistema');

Route::get('/eventos/editar/{id}', [EventosController::class, 'editarEventoForm'])->name('editarEvento');

