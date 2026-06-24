<nav x-data="{ open: false }" class="bg-black border-b border-red-600 shadow-lg">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}"
                   class="text-2xl font-bold text-red-600 hover:text-red-500">
                    🎨 Larpintmax
                </a>

                <div class="hidden sm:flex sm:items-center sm:ml-10">
                    <a href="{{ route('dashboard') }}"
                       class="text-white hover:text-red-500 font-semibold">
                        Dashboard
                    </a>
                </div>
            </div>

            <!-- Usuário -->
            <div class="hidden sm:flex sm:items-center">
                <span class="text-white mr-4">
                    {{ Auth::user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition">
                        Sair
                    </button>
                </form>
            </div>

            <!-- Mobile -->
            <div class="flex items-center sm:hidden">
                <button @click="open = ! open"
                        class="text-red-500 hover:text-red-400">
                    ☰
                </button>
            </div>

        </div>
    </div>

    <!-- Menu Mobile -->
    <div x-show="open" class="sm:hidden bg-zinc-900">

        <div class="px-4 py-3">

            <a href="{{ route('dashboard') }}"
               class="block text-white hover:text-red-500 mb-3">
                Dashboard
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg w-full">
                    Sair
                </button>
            </form>

        </div>

    </div>

</nav>