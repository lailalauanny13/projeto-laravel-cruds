<h1>Lista de Clientes</h1>

<a href="{{ route('clientes.create') }}">Novo Cliente</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Ações</th>
    </tr>

    @foreach($clientes as $cliente)
    <tr>
        <td>{{ $cliente->id }}</td>
        <td>{{ $cliente->nome }}</td>
        <td>{{ $cliente->telefone }}</td>
        <td>{{ $cliente->endereco }}</td>
        <td>

            <a href="{{ route('clientes.edit', $cliente->id) }}">
                Editar
            </a>

            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">

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