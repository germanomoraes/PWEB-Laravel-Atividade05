<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    // Exercício 7 — listar disciplinas com dados para a view
    public function index()
    {
        $disciplinas = [
            'Programação Web',
            'Banco de Dados',
            'Estrutura de Dados',
        ];
        return view('disciplinas.index', ['disciplinas' => $disciplinas]);
    }

    // Exercício 7 — exibir formulário de cadastro
    public function create()
    {
        return view('disciplinas.create');
    }

    // Exercício 7 — exibir disciplina por ID
    public function show($id)
    {
        return 'Disciplina ID: ' . $id;
    }
}
