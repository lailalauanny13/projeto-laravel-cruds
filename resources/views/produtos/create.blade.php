
<x-app-layout>

<div class="min-h-screen bg-black text-white p-8">

    <div class="max-w-2xl mx-auto bg-zinc-900 p-8 rounded-2xl shadow-lg">

        <h1 class="text-4xl text-red-600 font-bold mb-8">
            Novo Produto
        </h1>

        <form action="{{ route('produtos.store') }}" method="POST">

            @csrf

            <div class="mb-5">

                <label class="block mb-2">Nome</label>

                <input type="text"
                       name="nome"
                       class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3">

            </div>

            <div class="mb-5">

                <label class="block mb-2">Preço</label>

                <input type="text"
                       name="preco"
                       class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3">

            </div>

            <div class="mb-8">

                <label class="block mb-2">Quantidade</label>

                <input type="number"
                       name="quantidade"
                       class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-3">

            </div>

            <button class="bg-red-600 hover:bg-red-700 px-6 py-3 rounded-xl font-bold">

                Salvar Produto

            </button>

        </form>

    </div>

</div>

</x-app-layout>

