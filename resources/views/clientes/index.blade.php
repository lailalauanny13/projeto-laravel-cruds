@extends('layouts.app')

@section('title', 'Clientes — Larpintmax')

@section('conteudo')

<div class="cabecalho-pagina">
    <h2>Clientes</h2>
    <a href="{{ route('clientes.create') }}" class="btn btn-vermelho">+ Novo cliente</a>
</div>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->email ?? '—' }}</td>
                <td>{{ $cliente->telefone ?? '—' }}</td>
                <td>{{ $cliente->cpf ?? '—' }}</td>
                <td>
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-cinza">Editar</a>

                    <form method="POST"
                          action="{{ route('clientes.destroy', $cliente->id) }}"
                          style="display:inline;"
                          onsubmit="return confirm('Tem certeza que quer excluir este cliente?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-perigo">Excluir</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align:center; color:#666; padding:20px;">
                    Nenhum cliente cadastrado ainda.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 16px;">
        {{ $clientes->links() }}
    </div>
</div>

@endsection
