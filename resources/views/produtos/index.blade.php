@extends('layouts.app')

@section('title', 'Produtos')

@section('conteudo')

<div class="cabecalho-pagina">
    <h2>Produtos</h2>
    <a href="{{ route('produtos.create') }}" class="btn btn-vermelho">+ Novo produto</a>
</div>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>
                    {{-- Imagem do produto: coloque em public/images/produtos/{id}.jpg (60x60px) --}}
                    {{-- <img src="{{ asset('images/produtos/' . $produto->id . '.jpg') }}"
                         style="width:36px; height:36px; object-fit:cover; border-radius:3px; vertical-align:middle; margin-right:8px;"> --}}
                    {{ $produto->nome }}
                </td>
                <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                <td>
                    <span style="color: {{ $produto->estoque > 0 ? '#4caf7a' : '#f48080' }};">
                        {{ $produto->estoque }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-cinza">Editar</a>

                    <form method="POST"
                          action="{{ route('produtos.destroy', $produto->id) }}"
                          style="display:inline;"
                          onsubmit="return confirm('Excluir este produto?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-perigo">Excluir</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="text-align:center; color:#666; padding:20px;">
                    Nenhum produto cadastrado ainda.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 16px;">
        {{ $produtos->links() }}
    </div>
</div>

@endsection
