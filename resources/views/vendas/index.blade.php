
<x-app-layout>

<div class="min-h-screen bg-black text-white p-8">

    <div class="flex justify-between items-center mb-8">

        <h1 class="text-4xl font-bold text-red-600">
            Vendas
        </h1>

        <a href="{{ route('vendas.create') }}"
           class="bg-red-600 hover:bg-red-700 px-5 py-3 rounded-xl font-bold">

            Nova Venda

        </a>

    </div>

    <div class="bg-zinc-900 rounded-2xl shadow-lg p-6">

        <table class="w-full text-center text-white">

            <thead>

                <tr class="border-b border-zinc-700 text-red-500">

                    <th class="py-3">ID</th>
                    <th>Produto</th>
                    <th>Cliente</th>
                    <th>Valor</th>
                    <th>Data da Venda</th>
                    <th>Ações</th>

                </tr>

            </thead>

            <tbody>

                @foreach($vendas as $venda)

                <tr class="border-b border-zinc-800">

                    <td class="py-4">{{ $venda->id }}</td>
                    <td>{{ $venda->produto }}</td>
                    <td>{{ $venda->cliente }}</td>
                    <td>R$ {{ $venda->valor }}</td>
                    <td>{{ $venda->data_venda }}</td>

                    <td>

                        <a href="{{ route('vendas.edit', $venda->id) }}"
                           class="bg-yellow-500 hover:bg-yellow-600 px-4 py-2 rounded-lg">

                            Editar

                        </a>

                        <form action="{{ route('vendas.destroy', $venda->id) }}"
                              method="POST"
                              class="inline">

                            @csrf
                            @method('DELETE')

                            <button
                                class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg">

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
