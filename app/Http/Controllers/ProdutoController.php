<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderBy('nome')->paginate(10);
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'      => 'required|string|max:120',
            'descricao' => 'nullable|string',
            'preco'     => 'required|numeric|min:0',
            'estoque'   => 'required|integer|min:0',
        ]);

        Produto::create($request->only('nome', 'descricao', 'preco', 'estoque'));

        return redirect()->route('produtos.index')
                         ->with('sucesso', 'Produto cadastrado com sucesso!');
    }

    public function edit(Produto $produto)
    {
        return view('produtos.form', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome'      => 'required|string|max:120',
            'descricao' => 'nullable|string',
            'preco'     => 'required|numeric|min:0',
            'estoque'   => 'required|integer|min:0',
        ]);

        $produto->update($request->only('nome', 'descricao', 'preco', 'estoque'));

        return redirect()->route('produtos.index')
                         ->with('sucesso', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')
                         ->with('sucesso', 'Produto excluído com sucesso!');
    }
}
