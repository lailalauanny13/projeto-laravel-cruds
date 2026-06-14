<h1>Lista de Vendas</h1>

<a href="{{ route('vendas.create') }}">Nova Venda</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Cliente</th>
        <th>Valor</th>
        <th>Data da Venda</th>
        <th>Ações</th>
    </tr>

    @foreach($vendas as $venda)
    <tr>
        <td>{{ $venda->id }}</td>
        <td>{{ $venda->produto }}</td>
        <td>{{ $venda->cliente }}</td>
        <td>{{ $venda->valor }}</td>
        <td>{{ $venda->data_venda }}</td>
        <td>

            <a href="{{ route('vendas.edit', $venda->id) }}">
                Editar
            </a>

            <form action="{{ route('vendas.destroy', $venda->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Excluir
                </button>
            </form>

        </td>
    </tr>
    @endforeach

</table>