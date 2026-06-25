<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Larpintmax')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #1a1a1a;
            color: #d4d4d4;
            min-height: 100vh;
        }

        /* ---- SIDEBAR ---- */
        .sidebar {
            width: 230px;
            background-color: #111111;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            border-right: 2px solid #cc0000;
        }

        .sidebar-logo {
            padding: 24px 20px 20px;
            border-bottom: 1px solid #2a2a2a;
        }

        /* Logo: coloque em public/images/logo.png (160x50px) */
        .sidebar-logo img {
            width: 100%;
            max-width: 160px;
            display: block;
            margin-bottom: 6px;
        }

        .sidebar-logo .nome-empresa {
            font-size: 20px;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: 1px;
        }

        .sidebar-logo .nome-empresa span {
            color: #cc0000;
        }

        .sidebar-logo .slogan {
            font-size: 11px;
            color: #666666;
            margin-top: 3px;
            letter-spacing: 0.3px;
        }

        .sidebar-nav {
            padding: 16px 0;
            flex: 1;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            color: #aaaaaa;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.15s, color 0.15s;
            border-left: 3px solid transparent;
        }

        .sidebar-nav a:hover,
        .sidebar-nav a.ativo {
            background-color: #1f1f1f;
            color: #ffffff;
            border-left-color: #cc0000;
        }

        .sidebar-nav .icone {
            font-size: 17px;
            width: 22px;
            text-align: center;
        }

        .sidebar-footer {
            padding: 16px 20px;
            border-top: 1px solid #2a2a2a;
            font-size: 13px;
            color: #555;
        }

        .sidebar-footer strong {
            color: #999;
        }

        .sidebar-footer a {
            color: #cc0000;
            text-decoration: none;
            font-size: 12px;
            display: inline-block;
            margin-top: 4px;
        }

        .sidebar-footer a:hover {
            text-decoration: underline;
        }

        /* ---- CONTEÚDO ---- */
        .conteudo {
            margin-left: 230px;
            padding: 32px 36px;
            min-height: 100vh;
        }

        .cabecalho-pagina {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 28px;
        }

        .cabecalho-pagina h2 {
            font-size: 22px;
            color: #ffffff;
            font-weight: 600;
        }

        /* ---- CARDS ---- */
        .card {
            background-color: #222222;
            border: 1px solid #2e2e2e;
            border-radius: 6px;
            padding: 24px;
            margin-bottom: 24px;
        }

        /* ---- TABELA ---- */
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        thead th {
            background-color: #1a1a1a;
            color: #cc0000;
            padding: 11px 14px;
            text-align: left;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        tbody tr {
            border-bottom: 1px solid #2a2a2a;
        }

        tbody tr:hover {
            background-color: #272727;
        }

        tbody td {
            padding: 11px 14px;
            color: #cccccc;
        }

        /* ---- BOTÕES ---- */
        .btn {
            display: inline-block;
            padding: 8px 18px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            border: none;
            transition: opacity 0.15s;
        }

        .btn:hover { opacity: 0.85; }

        .btn-vermelho {
            background-color: #cc0000;
            color: #ffffff;
        }

        .btn-cinza {
            background-color: #3a3a3a;
            color: #dddddd;
        }

        .btn-perigo {
            background-color: #7a0000;
            color: #ffffff;
        }

        /* ---- FORMULÁRIOS ---- */
        .form-grupo {
            margin-bottom: 18px;
        }

        .form-grupo label {
            display: block;
            font-size: 13px;
            color: #999999;
            margin-bottom: 6px;
        }

        .form-grupo input,
        .form-grupo select,
        .form-grupo textarea {
            width: 100%;
            background-color: #2b2b2b;
            border: 1px solid #3a3a3a;
            border-radius: 4px;
            padding: 9px 12px;
            color: #e0e0e0;
            font-size: 14px;
            outline: none;
            transition: border-color 0.15s;
        }

        .form-grupo input:focus,
        .form-grupo select:focus,
        .form-grupo textarea:focus {
            border-color: #cc0000;
        }

        .form-grupo textarea {
            resize: vertical;
            min-height: 80px;
        }

        .erro-campo {
            color: #ff4444;
            font-size: 12px;
            margin-top: 4px;
        }

        /* ---- ALERTAS ---- */
        .alerta {
            padding: 12px 16px;
            border-radius: 4px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alerta-sucesso {
            background-color: #0d2e1a;
            border: 1px solid #1a5c33;
            color: #4caf7a;
        }

        .alerta-erro {
            background-color: #2e0d0d;
            border: 1px solid #5c1a1a;
            color: #f48080;
        }
    </style>
    @yield('estilos')
</head>
<body>

    <div class="sidebar">
        <div class="sidebar-logo">
            {{-- Logo: coloque em public/images/logo.png (160x50px) --}}
            {{-- <img src="{{ asset('images/logo.png') }}" alt="Larpintmax"> --}}
            <div class="nome-empresa">LAR<span>PINT</span>MAX</div>
            <div class="slogan">Sistema de Gestão</div>
        </div>

        <nav class="sidebar-nav">
            <a href="{{ route('dashboard') }}"
               class="{{ request()->routeIs('dashboard') ? 'ativo' : '' }}">
                <span class="icone">🏠</span> Início
            </a>
            <a href="{{ route('clientes.index') }}"
               class="{{ request()->routeIs('clientes.*') ? 'ativo' : '' }}">
                <span class="icone">👤</span> Clientes
            </a>
            <a href="{{ route('produtos.index') }}"
               class="{{ request()->routeIs('produtos.*') ? 'ativo' : '' }}">
                <span class="icone">🪣</span> Produtos
            </a>
            <a href="{{ route('vendas.index') }}"
               class="{{ request()->routeIs('vendas.*') ? 'ativo' : '' }}">
                <span class="icone">🧾</span> Vendas
            </a>
        </nav>

        <div class="sidebar-footer">
            <strong>{{ auth()->user()->name }}</strong><br>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('form-logout').submit();">
               Sair do sistema
            </a>
            <form id="form-logout" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
        </div>
    </div>

    <div class="conteudo">
        @if(session('sucesso'))
            <div class="alerta alerta-sucesso">✔ {{ session('sucesso') }}</div>
        @endif

        @if(session('erro'))
            <div class="alerta alerta-erro">✖ {{ session('erro') }}</div>
        @endif

        @yield('conteudo')
    </div>

</body>
</html>
