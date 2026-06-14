<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::all();
        return view('vendas.index', compact('vendas'));
    }

    public function create()
    {
        return view('vendas.create');
    }

    public function store(Request $request)
    {
        Venda::create($request->all());

        return redirect()->route('vendas.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $venda = Venda::findOrFail($id);

        return view('vendas.edit', compact('venda'));
    }

    public function update(Request $request, string $id)
    {
        $venda = Venda::findOrFail($id);

        $venda->update($request->all());

        return redirect()->route('vendas.index');
    }

    public function destroy(string $id)
    {
        $venda = Venda::findOrFail($id);

        $venda->delete();

        return redirect()->route('vendas.index');
    }
}