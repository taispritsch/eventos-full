<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\InscricaoController;
use App\Http\Controllers\PresencaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;

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

    Route::get('eventos', [EventoController::class, 'index']);
    Route::get('/eventos/{id}', [EventoController::class, 'show']);

    Route::get('/inscricoes', [InscricaoController::class, 'index']);
    Route::get('/inscricoes/{id}', [InscricaoController::class, 'show']);
    Route::post('/inscricoes', [InscricaoController::class, 'store']);
    Route::delete('/inscricoes/{id}', [InscricaoController::class, 'destroy']);

    Route::get('/presencas', [PresencaController::class, 'index']);
    Route::post('/presencas', [PresencaController::class, 'store']);

    Route::get('/usuarios', [UsuarioController::class, 'index']); 
    Route::post('/usuarios', [UsuarioController::class, 'store']);

    Route::post('/autenticacao', [AuthController::class, 'authenticate']);

    Route::post('/emails', [EmailController::class, 'send']);


