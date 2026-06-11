<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    // Exercício 6 — listar alunos
    public function index()
    {
        return 'Lista de alunos';
    }

    // Exercício 6 — exibir formulário de cadastro
    public function create()
    {
        return view('alunos.create');
    }

    // Exercício 6 — salvar aluno (simulado)
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return 'Aluno salvo: ' . $nome;
    }

    // Exercício 6 — exibir aluno por ID
    public function show($id)
    {
        return 'Aluno ID: ' . $id;
    }

    public function edit($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
}
