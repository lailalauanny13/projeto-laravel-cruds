<h1>Novo Produto</h1>

<form action="{{ route('produtos.store') }}" method="POST">

    @csrf

    <label>Nome:</label>
    <input type="text" name="nome">

    <br><br>

    <label>Preço:</label>
    <input type="text" name="preco">

    <br><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade">

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>