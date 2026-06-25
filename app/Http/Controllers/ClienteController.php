<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('nome')->paginate(10);
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'     => 'required|string|max:120',
            'email'    => 'nullable|email|max:180',
            'telefone' => 'nullable|string|max:20',
            'cpf'      => 'nullable|string|max:14',
            'endereco' => 'nullable|string|max:255',
        ]);

        Cliente::create($request->only('nome', 'email', 'telefone', 'cpf', 'endereco'));

        return redirect()->route('clientes.index')
                         ->with('sucesso', 'Cliente cadastrado com sucesso!');
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.form', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome'     => 'required|string|max:120',
            'email'    => 'nullable|email|max:180',
            'telefone' => 'nullable|string|max:20',
            'cpf'      => 'nullable|string|max:14',
            'endereco' => 'nullable|string|max:255',
        ]);

        $cliente->update($request->only('nome', 'email', 'telefone', 'cpf', 'endereco'));

        return redirect()->route('clientes.index')
                         ->with('sucesso', 'Cliente atualizado com sucesso!');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')
                         ->with('sucesso', 'Cliente excluído com sucesso!');
    }
}
