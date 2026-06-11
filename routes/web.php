<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProdutoController;

// Exercício 1 — rota simples
Route::get('/cursos', [CursoController::class, 'index']);

// Exercício 2 — rota para view de cadastro
Route::get('/cursos/novo', [CursoController::class, 'create']);

// Exercício 3 — rota para listagem com dados
Route::get('/cursos/listagem', [CursoController::class, 'listagem']);

// Exercício 5 — formulário GET e POST
Route::get('/cursos/cadastrar', [CursoController::class, 'formCadastro']);
Route::post('/cursos', [CursoController::class, 'store']);

// Exercício 4 — rota com parâmetro (deve ficar depois das rotas fixas)
Route::get('/cursos/{id}', [CursoController::class, 'show']);

// Exercício 6 — Resource Controller
Route::resource('alunos', AlunoController::class);

// Exercício 7 — DisciplinaController
Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplinas/create', [DisciplinaController::class, 'create']);
Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);

// Atividade Final — ProdutoController
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);
