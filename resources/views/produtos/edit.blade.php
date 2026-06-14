<h1>Editar Produto</h1>

<form action="{{ route('produtos.update', $produto->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Nome:</label>
    <input type="text" name="nome" value="{{ $produto->nome }}">

    <br><br>

    <label>Preço:</label>
    <input type="text" name="preco" value="{{ $produto->preco }}">

    <br><br>

    <label>Quantidade:</label>
    <input type="number" name="quantidade" value="{{ $produto->quantidade }}">

    <br><br>

    <button type="submit">
        Atualizar
    </button>

</form>