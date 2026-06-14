<x-app-layout>
    <div class="min-h-screen bg-black text-white p-8">

        <h1 class="text-4xl font-bold text-red-600 mb-10">
            Sistema Larpintmax
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <a href="{{ route('produtos.index') }}"
               class="bg-zinc-900 p-8 rounded-2xl shadow-lg hover:bg-red-700 duration-300">

                <h2 class="text-3xl font-bold text-red-500">
                    📦 Produtos
                </h2>

                <p class="mt-4 text-gray-300">
                    Gerenciar produtos do sistema.
                </p>

            </a>

            <a href="{{ route('clientes.index') }}"
               class="bg-zinc-900 p-8 rounded-2xl shadow-lg hover:bg-red-700 duration-300">

                <h2 class="text-3xl font-bold text-red-500">
                    👤 Clientes
                </h2>

                <p class="mt-4 text-gray-300">
                    Gerenciar clientes cadastrados.
                </p>

            </a>

            <a href="{{ route('vendas.index') }}"
               class="bg-zinc-900 p-8 rounded-2xl shadow-lg hover:bg-red-700 duration-300">

                <h2 class="text-3xl font-bold text-red-500">
                    💰 Vendas
                </h2>

                <p class="mt-4 text-gray-300">
                    Gerenciar vendas realizadas.
                </p>

            </a>

        </div>

    </div>
</x-app-layout>