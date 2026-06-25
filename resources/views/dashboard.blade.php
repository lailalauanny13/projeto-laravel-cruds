@extends('layouts.app')

@section('title', 'Início — Larpintmax')

@section('conteudo')

<div class="cabecalho-pagina">
    <h2>Painel de Controle</h2>
    <span style="font-size:13px; color:#555;">{{ now()->format('d/m/Y') }}</span>
</div>

<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 28px;">

    <div class="card" style="border-top: 3px solid #cc0000; text-align: center;">
        {{-- Ícone: public/images/icone-clientes.png (48x48px) --}}
        <div style="font-size: 38px; margin-bottom: 10px;">👤</div>
        <div style="font-size: 34px; font-weight: 700; color: #ffffff;">{{ $totalClientes }}</div>
        <div style="font-size: 13px; color: #777; margin-top: 4px;">Clientes cadastrados</div>
        <a href="{{ route('clientes.index') }}" class="btn btn-cinza" style="margin-top: 14px; font-size: 12px;">Ver todos</a>
    </div>

    <div class="card" style="border-top: 3px solid #cc0000; text-align: center;">
        {{-- Ícone: public/images/icone-produtos.png (48x48px) --}}
        <div style="font-size: 38px; margin-bottom: 10px;">🪣</div>
        <div style="font-size: 34px; font-weight: 700; color: #ffffff;">{{ $totalProdutos }}</div>
        <div style="font-size: 13px; color: #777; margin-top: 4px;">Produtos em estoque</div>
        <a href="{{ route('produtos.index') }}" class="btn btn-cinza" style="margin-top: 14px; font-size: 12px;">Ver todos</a>
    </div>

    <div class="card" style="border-top: 3px solid #cc0000; text-align: center;">
        {{-- Ícone: public/images/icone-vendas.png (48x48px) --}}
        <div style="font-size: 38px; margin-bottom: 10px;">🧾</div>
        <div style="font-size: 34px; font-weight: 700; color: #ffffff;">{{ $totalVendas }}</div>
        <div style="font-size: 13px; color: #777; margin-top: 4px;">Vendas realizadas</div>
        <a href="{{ route('vendas.index') }}" class="btn btn-cinza" style="margin-top: 14px; font-size: 12px;">Ver todas</a>
    </div>

</div>

<div class="card">
    <h3 style="color: #ffffff; margin-bottom: 16px; font-size: 16px;">🧾 Últimas vendas</h3>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Valor</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ultimasVendas as $venda)
            <tr>
                <td>{{ $venda->id }}</td>
                <td>{{ $venda->cliente->nome }}</td>
                <td>{{ $venda->produto->nome }}</td>
                <td>R$ {{ number_format($venda->valor_total, 2, ',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($venda->data_venda)->format('d/m/Y') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="text-align:center; color:#555; padding: 24px;">
                    Nenhuma venda registrada ainda.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
