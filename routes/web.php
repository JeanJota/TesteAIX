<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('cadastraraluno', [AlunoController::class, 'show'])->middleware('auth');

Route::post('criaraluno', [AlunoController::class, 'create'])->name('aluno.create')->middleware('auth');

Route::get('cadastrarcurso', [CursoController::class, 'show'])->middleware('auth');

Route::post('criarcurso', [CursoController::class, 'create'])->name('curso.create')->middleware('auth');

Route::get('listaralunos', [AlunoController::class, 'index'])->middleware('auth');

Route::get('listarcursos', [cursoController::class, 'index'])->middleware('auth');

Route::delete('aluno/{id}', [AlunoController::class, 'destroy'])->middleware('auth');

Route::get('aluno/{id}', [AlunoController::class, 'edit'])->name('aluno.edit')->middleware('auth');

Route::put('aluno/{id}', [AlunoController::class, 'update'])->middleware('auth');

Route::delete('curso/{id}', [CursoController::class, 'destroy'])->middleware('auth');

Route::get('curso/{id}', [CursoController::class, 'edit'])->name('curso.edit')->middleware('auth');

Route::put('curso/{id}', [CursoController::class, 'update'])->middleware('auth');

Auth::routes(['register' => false]);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/painel', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/logout', [HomeController::class, 'logout']);

Route::get('/importarxml', [CursoController::class, 'importarxml']);