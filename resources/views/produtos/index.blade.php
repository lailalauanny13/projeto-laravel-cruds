<x-app-layout>

<div class="min-h-screen bg-black text-white p-8">

    <div class="flex justify-between mb-8">

        <h1 class="text-4xl font-bold text-red-600">
            Produtos
        </h1>

        <a href="{{ route('produtos.create') }}"
           class="bg-red-600 px-5 py-3 rounded-lg hover:bg-red-700">

            Novo Produto

        </a>

    </div>

    <div class="bg-zinc-900 rounded-xl shadow-lg p-6">

        <table class="w-full">

            <thead>

            <tr class="text-red-500 border-b border-zinc-700">

                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Ações</th>

            </tr>

            </thead>

            <tbody>

            @foreach($produtos as $produto)

            <tr class="border-b border-zinc-800 text-center">

                <td>{{ $produto->id }}</td>

                <td>{{ $produto->nome }}</td>

                <td>R$ {{ $produto->preco }}</td>

                <td>{{ $produto->quantidade }}</td>

                <td>

                    <a href="{{ route('produtos.edit',$produto->id) }}"
                       class="bg-yellow-500 px-3 py-2 rounded">

                        Editar

                    </a>

                    <form action="{{ route('produtos.destroy',$produto->id) }}"
                          method="POST"
                          class="inline">

                        @csrf
                        @method('DELETE')

                        <button class="bg-red-600 px-3 py-2 rounded">

                            Excluir

                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>