@extends('layouts.app')

@section('title', isset($cliente) ? 'Editar Cliente — Larpintmax' : 'Novo Cliente — Larpintmax')

@section('conteudo')

<div class="cabecalho-pagina">
    <h2>{{ isset($cliente) ? 'Editar Cliente' : 'Novo Cliente' }}</h2>
    <a href="{{ route('clientes.index') }}" class="btn btn-cinza">← Voltar</a>
</div>

<div class="card" style="max-width: 600px;">

    <form method="POST"
          action="{{ isset($cliente) ? route('clientes.update', $cliente->id) : route('clientes.store') }}">
        @csrf
        @if(isset($cliente))
            @method('PUT')
        @endif

        <div class="form-grupo">
            <label for="nome">Nome completo *</label>
            <input type="text"
                   id="nome"
                   name="nome"
                   value="{{ old('nome', $cliente->nome ?? '') }}"
                   placeholder="Ex: João da Silva">
            @error('nome')
                <span class="erro-campo">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-grupo">
            <label for="email">E-mail</label>
            <input type="email"
                   id="email"
                   name="email"
                   value="{{ old('email', $cliente->email ?? '') }}"
                   placeholder="joao@email.com">
            @error('email')
                <span class="erro-campo">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-grupo">
            <label for="telefone">Telefone</label>
            <input type="text"
                   id="telefone"
                   name="telefone"
                   value="{{ old('telefone', $cliente->telefone ?? '') }}"
                   placeholder="(85) 99999-9999">
            @error('telefone')
                <span class="erro-campo">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-grupo">
            <label for="cpf">CPF</label>
            <input type="text"
                   id="cpf"
                   name="cpf"
                   value="{{ old('cpf', $cliente->cpf ?? '') }}"
                   placeholder="000.000.000-00">
            @error('cpf')
                <span class="erro-campo">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-grupo">
            <label for="endereco">Endereço</label>
            <input type="text"
                   id="endereco"
                   name="endereco"
                   value="{{ old('endereco', $cliente->endereco ?? '') }}"
                   placeholder="Rua, número, bairro, cidade">
            @error('endereco')
                <span class="erro-campo">{{ $message }}</span>
            @enderror
        </div>

        <div style="display: flex; gap: 10px; margin-top: 6px;">
            <button type="submit" class="btn btn-vermelho">
                {{ isset($cliente) ? 'Salvar alterações' : 'Cadastrar cliente' }}
            </button>
            <a href="{{ route('clientes.index') }}" class="btn btn-cinza">Cancelar</a>
        </div>

    </form>
</div>

@endsection
