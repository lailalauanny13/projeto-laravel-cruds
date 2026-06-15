<x-app-layout>
    <div class="min-h-screen bg-black px-10 py-8">

        <!-- Título -->
        <div class="mb-10">
            <h1 class="text-5xl font-bold text-white">
                Painel de Controle
            </h1>

            <p class="text-gray-400 mt-2 text-lg">
                Selecione uma das áreas do sistema Larpintmax para gerenciar.
            </p>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

            <!-- Produtos -->
            <a href="{{ route('produtos.index') }}"
               class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8 shadow-xl hover:border-red-600 hover:-translate-y-2 duration-300">

                <div class="w-16 h-16 rounded-2xl bg-red-950 flex items-center justify-center mb-6">
                    <span class="text-3xl">📦</span>
                </div>

                <h2 class="text-3xl font-bold text-white mb-4">
                    Produtos
                </h2>

                <p class="text-gray-400 mb-6">
                    Gerencie estoque, preços e especificações dos produtos.
                </p>

                <span class="text-red-500 font-semibold">
                    Acessar módulo →
                </span>

            </a>

            <!-- Clientes -->
            <a href="{{ route('clientes.index') }}"
               class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8 shadow-xl hover:border-red-600 hover:-translate-y-2 duration-300">

                <div class="w-16 h-16 rounded-2xl bg-red-950 flex items-center justify-center mb-6">
                    <span class="text-3xl">👤</span>
                </div>

                <h2 class="text-3xl font-bold text-white mb-4">
                    Clientes
                </h2>

                <p class="text-gray-400 mb-6">
                    Visualize e gerencie os clientes cadastrados.
                </p>

                <span class="text-red-500 font-semibold">
                    Acessar módulo →
                </span>

            </a>

            <!-- Vendas -->
            <a href="{{ route('vendas.index') }}"
               class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8 shadow-xl hover:border-red-600 hover:-translate-y-2 duration-300">

                <div class="w-16 h-16 rounded-2xl bg-red-950 flex items-center justify-center mb-6">
                    <span class="text-3xl">💰</span>
                </div>

                <h2 class="text-3xl font-bold text-white mb-4">
                    Vendas
                </h2>

                <p class="text-gray-400 mb-6">
                    Acompanhe e controle as vendas realizadas.
                </p>

                <span class="text-red-500 font-semibold">
                    Acessar módulo →
                </span>

            </a>

        </div>

        <!-- Rodapé -->
        <div class="border-t border-zinc-800 mt-20 pt-8 flex justify-between text-gray-500 text-sm">
            <span>© 2026 Larpintmax. Todos os direitos reservados.</span>
            <span>Painel v2.0</span>
        </div>

    </div>
</x-app-layout>