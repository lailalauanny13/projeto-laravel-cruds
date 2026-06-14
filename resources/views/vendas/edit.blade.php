<h1>Editar Venda</h1>

<form action="{{ route('vendas.update', $venda->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Produto:</label>
    <input type="text" name="produto" value="{{ $venda->produto }}">

    <br><br>

    <label>Cliente:</label>
    <input type="text" name="cliente" value="{{ $venda->cliente }}">

    <br><br>

    <label>Valor:</label>
    <input type="text" name="valor" value="{{ $venda->valor }}">

    <br><br>

    <label>Data da Venda:</label>
    <input type="date" name="data_venda" value="{{ $venda->data_venda }}">

    <br><br>

    <button type="submit">
        Atualizar
    </button>

</form>