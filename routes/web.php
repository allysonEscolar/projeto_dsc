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

Route::get('/curso-listagem', [CursoController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
