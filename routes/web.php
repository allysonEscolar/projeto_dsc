<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/apresentacao-disciplina', function () {
    return view('disciplina');
});

Route::get('/minha-rota', function () {
    return view('minhaView');
});

Route::get('/apresentacao', [CursoController::class, 'index']);