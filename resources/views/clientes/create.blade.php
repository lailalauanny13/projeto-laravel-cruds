<h1>Novo Cliente</h1>

<form action="{{ route('clientes.store') }}" method="POST">

    @csrf

    <label>Nome:</label>
    <input type="text" name="nome">

    <br><br>

    <label>Telefone:</label>
    <input type="text" name="telefone">

    <br><br>

    <label>Endereço:</label>
    <input type="text" name="endereco">

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>