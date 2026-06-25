@extends('layouts.app')

@section('title', 'Detalhes da Venda #' . $venda->id)

@section('conteudo')

<div class="cabecalho-pagina">
    <h2>Venda #{{ $venda->id }}</h2>
    <div style="display:flex; gap:10px;">
        <a href="{{ route('vendas.edit', $venda->id) }}" class="btn btn-cinza">Editar</a>
        <a href="{{ route('vendas.index') }}" class="btn btn-cinza">← Voltar</a>
    </div>
</div>

<div class="card" style="max-width: 600px;">

    <table style="width:100%;">
        <tbody>
            <tr>
                <td style="color:#888; width:160px; padding: 10px 0;">Cliente</td>
                <td style="color:#fff; padding: 10px 0;">{{ $venda->cliente->nome }}</td>
            </tr>
            <tr>
                <td style="color:#888; padding: 10px 0;">Produto</td>
                <td style="color:#fff; padding: 10px 0;">{{ $venda->produto->nome }}</td>
            </tr>
            <tr>
                <td style="color:#888; padding: 10px 0;">Quantidade</td>
                <td style="color:#fff; padding: 10px 0;">{{ $venda->quantidade }}</td>
            </tr>
            <tr>
                <td style="color:#888; padding: 10px 0;">Valor total</td>
                <td style="color:#cc0000; font-weight:700; font-size:18px; padding: 10px 0;">
                    R$ {{ number_format($venda->valor_total, 2, ',', '.') }}
                </td>
            </tr>
            <tr>
                <td style="color:#888; padding: 10px 0;">Data</td>
                <td style="color:#fff; padding: 10px 0;">
                    {{ \Carbon\Carbon::parse($venda->data_venda)->format('d/m/Y') }}
                </td>
            </tr>
            @if($venda->observacoes)
            <tr>
                <td style="color:#888; padding: 10px 0; vertical-align:top;">Observações</td>
                <td style="color:#ccc; padding: 10px 0;">{{ $venda->observacoes }}</td>
            </tr>
            @endif
        </tbody>
    </table>

</div>

@endsection
