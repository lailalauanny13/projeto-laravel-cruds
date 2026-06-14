<h1>Nova Venda</h1>

<form action="{{ route('vendas.store') }}" method="POST">

    @csrf

    <label>Produto:</label>
    <input type="text" name="produto">

    <br><br>

    <label>Cliente:</label>
    <input type="text" name="cliente">

    <br><br>

    <label>Valor:</label>
    <input type="text" name="valor">

    <br><br>

    <label>Data da Venda:</label>
    <input type="date" name="data_venda">

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>