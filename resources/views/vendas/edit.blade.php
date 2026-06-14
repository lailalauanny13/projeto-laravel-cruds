
<x-app-layout>

<div class="min-h-screen bg-black text-white p-8">

    <div class="max-w-2xl mx-auto bg-zinc-900 p-8 rounded-2xl shadow-lg">

        <h1 class="text-4xl text-red-600 font-bold mb-8">
            Editar Venda
        </h1>

        <form action="{{ route('vendas.update', $venda->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-5">

                <label class="block mb-2">
                    Produto
                </label>

                <input
                    type="text"
                    name="produto"
                    value="{{ $venda->produto }}"
                    class="w-full bg-zinc-800 text-white border border-zinc-700 rounded-xl px-4 py-3 focus:outline-none focus:border-red-600"
                >

            </div>

            <div class="mb-5">

                <label class="block mb-2">
                    Cliente
                </label>

                <input
                    type="text"
                    name="cliente"
                    value="{{ $venda->cliente }}"
                    class="w-full bg-zinc-800 text-white border border-zinc-700 rounded-xl px-4 py-3 focus:outline-none focus:border-red-600"
                >

            </div>

            <div class="mb-5">

                <label class="block mb-2">
                    Valor
                </label>

                <input
                    type="text"
                    name="valor"
                    value="{{ $venda->valor }}"
                    class="w-full bg-zinc-800 text-white border border-zinc-700 rounded-xl px-4 py-3 focus:outline-none focus:border-red-600"
                >

            </div>

            <div class="mb-8">

                <label class="block mb-2">
                    Data da Venda
                </label>

                <input
                    type="date"
                    name="data_venda"
                    value="{{ $venda->data_venda }}"
                    class="w-full bg-zinc-800 text-white border border-zinc-700 rounded-xl px-4 py-3 focus:outline-none focus:border-red-600"
                >

            </div>

            <div class="flex gap-4">

                <button
                    type="submit"
                    class="bg-red-600 hover:bg-red-700 px-6 py-3 rounded-xl font-bold">

                    Atualizar Venda

                </button>

                <a
                    href="{{ route('vendas.index') }}"
                    class="bg-zinc-700 hover:bg-zinc-600 px-6 py-3 rounded-xl font-bold">

                    Voltar

                </a>

            </div>

        </form>

    </div>

</div>

</x-app-layout>

