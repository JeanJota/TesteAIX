<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('cadastraraluno', [AlunoController::class, 'show']);

Route::post('criaraluno', [AlunoController::class, 'create'])->name('aluno.create');

Route::get('cadastrarcurso', [CursoController::class, 'show']);

Route::post('criarcurso', [CursoController::class, 'create'])->name('curso.create');

Route::get('listaralunos', [AlunoController::class, 'index']);

Route::get('listarcursos', [cursoController::class, 'index']);

Route::delete('aluno/{id}', [AlunoController::class, 'destroy']);

Route::get('aluno/{id}', [AlunoController::class, 'edit'])->name('aluno.edit');

Route::put('aluno/{id}', [AlunoController::class, 'update']);

Route::delete('curso/{id}', [CursoController::class, 'destroy']);

Route::get('curso/{id}', [CursoController::class, 'edit'])->name('curso.edit');

Route::put('curso/{id}', [CursoController::class, 'update']);

Auth::routes(['register' => false]);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/painel', [HomeController::class, 'index'])->name('home');

Route::get('/logout', [HomeController::class, 'logout']);