<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-black">

        <div class="w-full max-w-md bg-zinc-900 rounded-3xl shadow-2xl p-10">

            <h1 class="text-5xl font-bold text-center text-red-600 mb-2">
                Larpintmax
            </h1>

            <p class="text-center text-gray-400 mb-8">
                Faça login para acessar o sistema
            </p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-green-500" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">

                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-white mb-2">
                        E-mail
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                        class="w-full bg-zinc-800 text-white border border-zinc-700 rounded-xl px-4 py-3 focus:outline-none focus:border-red-600"
                    >

                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Senha -->
                <div class="mt-5">

                    <label class="block text-white mb-2">
                        Senha
                    </label>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        class="w-full bg-zinc-800 text-white border border-zinc-700 rounded-xl px-4 py-3 focus:outline-none focus:border-red-600"
                    >

                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />

                </div>

                <!-- Lembrar-me -->
                <div class="mt-5">

                    <label class="inline-flex items-center">

                        <input
                            id="remember_me"
                            type="checkbox"
                            name="remember"
                            class="rounded border-zinc-700 text-red-600 focus:ring-red-600"
                        >

                        <span class="ml-2 text-gray-400">
                            Lembrar-me
                        </span>

                    </label>

                </div>

                <!-- Esqueci a senha -->
                @if (Route::has('password.request'))

                    <div class="mt-4">

                        <a
                            class="text-sm text-gray-400 hover:text-red-500"
                            href="{{ route('password.request') }}"
                        >
                            Esqueceu sua senha?
                        </a>

                    </div>

                @endif

                <!-- Botão -->
                <button
                    type="submit"
                    class="w-full mt-8 bg-red-600 hover:bg-red-700 duration-300 text-white py-3 rounded-xl font-bold"
                >
                    Entrar
                </button>

            </form>

        </div>

    </div>

</x-guest-layout>