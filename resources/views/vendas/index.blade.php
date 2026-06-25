@extends('layouts.app')

@section('title', 'Vendas — Larpintmax')

@section('conteudo')

<div class="cabecalho-pagina">
    <h2>Vendas</h2>
    <a href="{{ route('vendas.create') }}" class="btn btn-vermelho">+ Nova venda</a>
</div>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Qtd.</th>
                <th>Total</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($vendas as $venda)
            <tr>
                <td>{{ $venda->id }}</td>
                <td>{{ $venda->cliente->nome }}</td>
                <td>{{ $venda->produto->nome }}</td>
                <td>{{ $venda->quantidade }}</td>
                <td>R$ {{ number_format($venda->valor_total, 2, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($venda->data_venda)->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ route('vendas.show', $venda->id) }}" class="btn btn-cinza">Ver</a>
                    <a href="{{ route('vendas.edit', $venda->id) }}" class="btn btn-cinza">Editar</a>

                    <form method="POST"
                          action="{{ route('vendas.destroy', $venda->id) }}"
                          style="display:inline;"
                          onsubmit="return confirm('Excluir esta venda?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-perigo">Excluir</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" style="text-align:center; color:#666; padding:20px;">
                    Nenhuma venda registrada ainda.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 16px;">
        {{ $vendas->links() }}
    </div>
</div>

@endsection
