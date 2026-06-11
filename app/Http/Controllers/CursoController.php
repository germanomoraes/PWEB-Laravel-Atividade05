<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Exercício 1 — retorna mensagem simples
    public function index()
    {
        return 'Lista de cursos';
    }

    // Exercício 2 — retorna view de cadastro
    public function create()
    {
        return view('cursos.create');
    }

    // Exercício 3 — envia array de cursos para a view
    public function listagem()
    {
        $cursos = [
            'Análise e Desenvolvimento de Sistemas',
            'Engenharia de Software',
            'Redes de Computadores',
        ];
        return view('cursos.listagem', ['cursos' => $cursos]);
    }

    // Exercício 4 — recebe parâmetro da rota
    public function show($id)
    {
        return 'Curso selecionado: ID ' . $id;
    }

    // Exercício 5 — exibe formulário
    public function formCadastro()
    {
        return view('cursos.form');
    }

    // Exercício 5 — recebe dados do formulário
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return 'Curso cadastrado: ' . $nome;
    }
}
