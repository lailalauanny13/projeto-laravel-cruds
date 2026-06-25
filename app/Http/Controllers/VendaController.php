<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::with(['cliente', 'produto'])
                       ->orderByDesc('data_venda')
                       ->paginate(10);

        return view('vendas.index', compact('vendas'));
    }

    public function create()
    {
        $clientes = Cliente::orderBy('nome')->get();
        $produtos = Produto::orderBy('nome')->get();
        return view('vendas.form', compact('clientes', 'produtos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id'  => 'required|exists:clientes,id',
            'produto_id'  => 'required|exists:produtos,id',
            'quantidade'  => 'required|integer|min:1',
            'valor_total' => 'required|numeric|min:0',
            'data_venda'  => 'required|date',
            'observacoes' => 'nullable|string',
        ]);

        Venda::create($request->only(
            'cliente_id', 'produto_id', 'quantidade',
            'valor_total', 'data_venda', 'observacoes'
        ));

        return redirect()->route('vendas.index')
                         ->with('sucesso', 'Venda registrada com sucesso!');
    }

    public function show(Venda $venda)
    {
        $venda->load(['cliente', 'produto']);
        return view('vendas.show', compact('venda'));
    }

    public function edit(Venda $venda)
    {
        $clientes = Cliente::orderBy('nome')->get();
        $produtos = Produto::orderBy('nome')->get();
        return view('vendas.form', compact('venda', 'clientes', 'produtos'));
    }

    public function update(Request $request, Venda $venda)
    {
        $request->validate([
            'cliente_id'  => 'required|exists:clientes,id',
            'produto_id'  => 'required|exists:produtos,id',
            'quantidade'  => 'required|integer|min:1',
            'valor_total' => 'required|numeric|min:0',
            'data_venda'  => 'required|date',
            'observacoes' => 'nullable|string',
        ]);

        $venda->update($request->only(
            'cliente_id', 'produto_id', 'quantidade',
            'valor_total', 'data_venda', 'observacoes'
        ));

        return redirect()->route('vendas.index')
                         ->with('sucesso', 'Venda atualizada com sucesso!');
    }

    public function destroy(Venda $venda)
    {
        $venda->delete();

        return redirect()->route('vendas.index')
                         ->with('sucesso', 'Venda excluída com sucesso!');
    }
}
