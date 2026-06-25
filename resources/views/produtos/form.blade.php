@extends('layouts.app')

@section('title', isset($produto) ? 'Editar Produto' : 'Novo Produto')

@section('conteudo')

<div class="cabecalho-pagina">
    <h2>{{ isset($produto) ? 'Editar Produto' : 'Novo Produto' }}</h2>
    <a href="{{ route('produtos.index') }}" class="btn btn-cinza">← Voltar</a>
</div>

<div class="card" style="max-width: 600px;">

    <form method="POST"
          action="{{ isset($produto) ? route('produtos.update', $produto->id) : route('produtos.store') }}">
        @csrf
        @if(isset($produto))
            @method('PUT')
        @endif

        <div class="form-grupo">
            <label for="nome">Nome do produto *</label>
            <input type="text"
                   id="nome"
                   name="nome"
                   value="{{ old('nome', $produto->nome ?? '') }}"
                   placeholder="Ex: Camiseta Básica">
            @error('nome')
                <span class="erro-campo">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-grupo">
            <label for="descricao">Descrição</label>
            <textarea id="descricao"
                      name="descricao"
                      placeholder="Descreva o produto...">{{ old('descricao', $produto->descricao ?? '') }}</textarea>
            @error('descricao')
                <span class="erro-campo">{{ $message }}</span>
            @enderror
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
            <div class="form-grupo">
                <label for="preco">Preço (R$) *</label>
                <input type="number"
                       id="preco"
                       name="preco"
                       step="0.01"
                       min="0"
                       value="{{ old('preco', $produto->preco ?? '') }}"
                       placeholder="0,00">
                @error('preco')
                    <span class="erro-campo">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-grupo">
                <label for="estoque">Estoque *</label>
                <input type="number"
                       id="estoque"
                       name="estoque"
                       min="0"
                       value="{{ old('estoque', $produto->estoque ?? '0') }}"
                       placeholder="0">
                @error('estoque')
                    <span class="erro-campo">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div style="display: flex; gap: 10px; margin-top: 6px;">
            <button type="submit" class="btn btn-vermelho">
                {{ isset($produto) ? 'Salvar alterações' : 'Cadastrar produto' }}
            </button>
            <a href="{{ route('produtos.index') }}" class="btn btn-cinza">Cancelar</a>
        </div>

    </form>
</div>

@endsection
