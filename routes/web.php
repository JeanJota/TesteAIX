<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdminController::class, 'login']);

Route::any('painel', [AdminController::class, 'login'])->name('admins.login');

Route::get('logout', [AdminController::class, 'logout'])->name('logout');

Route::get('cadastraraluno', [AdminController::class, 'cadastraraluno']);//->middleware('Auth');

Route::post('criaraluno', [AlunoController::class, 'create'])->name('aluno.create');

Route::get('cadastrarcurso', [AdminController::class, 'cadastrarcurso']);

Route::post('criarcurso', [CursoController::class, 'create'])->name('curso.create');

Route::get('listaralunos', [AlunoController::class, 'index']);

Route::get('listarcursos', [cursoController::class, 'index']);

Route::delete('aluno/{id}', [AlunoController::class, 'destroy']);

Route::get('aluno/{id}', [AlunoController::class, 'edit'])->name('aluno.edit');

Route::put('aluno/{id}', [AlunoController::class, 'update']);

Route::delete('curso/{id}', [CursoController::class, 'destroy']);

Route::get('curso/{id}', [CursoController::class, 'edit'])->name('curso.edit');

Route::put('curso/{id}', [CursoController::class, 'update']);