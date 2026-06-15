
<nav class="bg-zinc-950 border-b border-zinc-800 shadow-lg">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex items-center gap-8">

                <a href="{{ route('dashboard') }}"
                   class="text-3xl font-bold text-red-600">

                    Larpintmax

                </a>

                <div class="hidden md:flex items-center gap-6">

                    <a href="{{ route('dashboard') }}"
                       class="text-gray-300 hover:text-red-500 font-semibold duration-300">
                        Dashboard
                    </a>

                    <a href="{{ route('produtos.index') }}"
                       class="text-gray-300 hover:text-red-500 font-semibold duration-300">
                        Produtos
                    </a>

                    <a href="{{ route('clientes.index') }}"
                       class="text-gray-300 hover:text-red-500 font-semibold duration-300">
                        Clientes
                    </a>

                    <a href="{{ route('vendas.index') }}"
                       class="text-gray-300 hover:text-red-500 font-semibold duration-300">
                        Vendas
                    </a>

                </div>

            </div>

            <!-- Usuário -->
            <div class="flex items-center gap-4">

                <div class="text-gray-300">
                    {{ Auth::user()->name }}
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-xl text-white font-bold duration-300">

                        Sair

                    </button>

                </form>

            </div>

        </div>

    </div>

</nav>
