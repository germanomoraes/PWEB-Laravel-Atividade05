<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Atividade Final — exibir formulário
    public function create()
    {
        return view('produtos.create');
    }

    // Atividade Final — receber dado do formulário
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return 'Produto recebido: ' . $nome;
    }
}
