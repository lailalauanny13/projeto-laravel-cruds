<h1>Editar Cliente</h1>

<form action="{{ route('clientes.update', $cliente->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Nome:</label>
    <input type="text" name="nome" value="{{ $cliente->nome }}">

    <br><br>

    <label>Telefone:</label>
    <input type="text" name="telefone" value="{{ $cliente->telefone }}">

    <br><br>

    <label>Endereço:</label>
    <input type="text" name="endereco" value="{{ $cliente->endereco }}">

    <br><br>

    <button type="submit">
        Atualizar
    </button>

</form>