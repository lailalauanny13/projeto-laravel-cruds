@extends('layouts.app')

@section('title', isset($venda) ? 'Editar Venda' : 'Nova Venda')

@section('conteudo')

<div class="cabecalho-pagina">
    <h2>{{ isset($venda) ? 'Editar Venda' : 'Nova Venda' }}</h2>
    <a href="{{ route('vendas.index') }}" class="btn btn-cinza">← Voltar</a>
</div>

<div class="card" style="max-width: 640px;">

    <form method="POST"
          action="{{ isset($venda) ? route('vendas.update', $venda->id) : route('vendas.store') }}"
          id="form-venda">
        @csrf
        @if(isset($venda))
            @method('PUT')
        @endif

        <div class="form-grupo">
            <label for="cliente_id">Cliente *</label>
            <select id="cliente_id" name="cliente_id">
                <option value="">— Selecione um cliente —</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}"
                        {{ old('cliente_id', $venda->cliente_id ?? '') == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nome }}
                    </option>
                @endforeach
            </select>
            @error('cliente_id')
                <span class="erro-campo">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-grupo">
            <label for="produto_id">Produto *</label>
            <select id="produto_id" name="produto_id" onchange="atualizarPreco()">
                <option value="">— Selecione um produto —</option>
                @foreach($produtos as $produto)
                    <option value="{{ $produto->id }}"
                            data-preco="{{ $produto->preco }}"
                        {{ old('produto_id', $venda->produto_id ?? '') == $produto->id ? 'selected' : '' }}>
                        {{ $produto->nome }} — R$ {{ number_format($produto->preco, 2, ',', '.') }}
                    </option>
                @endforeach
            </select>
            @error('produto_id')
                <span class="erro-campo">{{ $message }}</span>
            @enderror
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">

            <div class="form-grupo">
                <label for="quantidade">Quantidade *</label>
                <input type="number"
                       id="quantidade"
                       name="quantidade"
                       min="1"
                       value="{{ old('quantidade', $venda->quantidade ?? 1) }}"
                       onchange="atualizarPreco()">
                @error('quantidade')
                    <span class="erro-campo">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-grupo">
                <label for="valor_total">Valor total (R$) *</label>
                <input type="number"
                       id="valor_total"
                       name="valor_total"
                       step="0.01"
                       min="0"
                       value="{{ old('valor_total', $venda->valor_total ?? '') }}"
                       placeholder="0,00">
                @error('valor_total')
                    <span class="erro-campo">{{ $message }}</span>
                @enderror
            </div>

        </div>

        <div class="form-grupo">
            <label for="data_venda">Data da venda *</label>
            <input type="date"
                   id="data_venda"
                   name="data_venda"
                   value="{{ old('data_venda', isset($venda) ? $venda->data_venda : date('Y-m-d')) }}">
            @error('data_venda')
                <span class="erro-campo">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-grupo">
            <label for="observacoes">Observações</label>
            <textarea id="observacoes"
                      name="observacoes"
                      placeholder="Alguma observação sobre a venda...">{{ old('observacoes', $venda->observacoes ?? '') }}</textarea>
        </div>

        <div style="display: flex; gap: 10px; margin-top: 6px;">
            <button type="submit" class="btn btn-vermelho">
                {{ isset($venda) ? 'Salvar alterações' : 'Registrar venda' }}
            </button>
            <a href="{{ route('vendas.index') }}" class="btn btn-cinza">Cancelar</a>
        </div>

    </form>
</div>

@endsection

@section('estilos')
<script>
    function atualizarPreco() {
        var select   = document.getElementById('produto_id');
        var opcao    = select.options[select.selectedIndex];
        var preco    = parseFloat(opcao.getAttribute('data-preco')) || 0;
        var qtd      = parseInt(document.getElementById('quantidade').value) || 1;
        var total    = (preco * qtd).toFixed(2);
        document.getElementById('valor_total').value = total;
    }
</script>
@endsection
