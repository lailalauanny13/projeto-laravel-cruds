
<x-app-layout>

<div class="min-h-screen bg-black text-white p-8">

    <div class="max-w-2xl mx-auto bg-zinc-900 p-8 rounded-2xl shadow-lg">

        <h1 class="text-4xl text-red-600 font-bold mb-8">
            Novo Cliente
        </h1>

        <form action="{{ route('clientes.store') }}" method="POST">

            @csrf

            <div class="mb-5">

                <label class="block mb-2">
                    Nome
                </label>

                <input
                    type="text"
                    name="nome"
                    class="w-full bg-zinc-800 text-white border border-zinc-700 rounded-xl px-4 py-3 focus:outline-none focus:border-red-600"
                >

            </div>

            <div class="mb-5">

                <label class="block mb-2">
                    Telefone
                </label>

                <input
                    type="text"
                    name="telefone"
                    class="w-full bg-zinc-800 text-white border border-zinc-700 rounded-xl px-4 py-3 focus:outline-none focus:border-red-600"
                >

            </div>

            <div class="mb-8">

                <label class="block mb-2">
                    Endereço
                </label>

                <input
                    type="text"
                    name="endereco"
                    class="w-full bg-zinc-800 text-white border border-zinc-700 rounded-xl px-4 py-3 focus:outline-none focus:border-red-600"
                >

            </div>

            <button
                class="bg-red-600 hover:bg-red-700 px-6 py-3 rounded-xl font-bold">

                Salvar Cliente

            </button>

        </form>

    </div>

</div>

</x-app-layout>

