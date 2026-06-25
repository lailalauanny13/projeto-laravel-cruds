<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Larpintmax</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #141414;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-wrapper {
            display: flex;
            width: 820px;
            min-height: 480px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 8px 40px rgba(0,0,0,0.6);
        }

        /* Painel esquerdo */
        /* Imagem de fundo: public/images/login-bg.jpg (400x480px, foto de pintura/tinta) */
        .login-visual {
            flex: 1;
            background-color: #aa0000;
            background-image: url('/images/login-bg.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 32px;
            position: relative;
        }

        .login-visual::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.75) 40%, transparent);
        }

        .login-visual-texto {
            position: relative;
            z-index: 1;
        }

        .login-visual-texto .marca {
            font-size: 28px;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: 2px;
        }

        .login-visual-texto .marca span {
            color: #ffcccc;
        }

        .login-visual-texto p {
            color: rgba(255,255,255,0.7);
            font-size: 13px;
            margin-top: 6px;
        }

        /* Painel direito */
        .login-form-area {
            width: 360px;
            background-color: #1e1e1e;
            padding: 48px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-form-area h1 {
            font-size: 20px;
            color: #ffffff;
            margin-bottom: 4px;
        }

        .login-form-area .subtitulo {
            font-size: 13px;
            color: #666;
            margin-bottom: 32px;
        }

        .campo {
            margin-bottom: 18px;
        }

        .campo label {
            display: block;
            font-size: 11px;
            color: #777;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
        }

        .campo input {
            width: 100%;
            background-color: #2a2a2a;
            border: 1px solid #333;
            border-radius: 4px;
            padding: 10px 13px;
            color: #e0e0e0;
            font-size: 14px;
            outline: none;
            transition: border-color 0.15s;
        }

        .campo input:focus {
            border-color: #cc0000;
        }

        .erro-campo {
            color: #ff5555;
            font-size: 12px;
            margin-top: 5px;
        }

        .alerta-erro {
            background-color: #2e0d0d;
            border: 1px solid #5c1a1a;
            color: #f48080;
            padding: 10px 14px;
            border-radius: 4px;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .btn-entrar {
            width: 100%;
            background-color: #cc0000;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 11px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            letter-spacing: 0.5px;
            transition: background-color 0.15s;
            margin-top: 8px;
        }

        .btn-entrar:hover {
            background-color: #aa0000;
        }
    </style>
</head>
<body>

<div class="login-wrapper">

    <div class="login-visual">
        <div class="login-visual-texto">
            <div class="marca">LAR<span>PINT</span>MAX</div>
            <p>Sistema de gestão interno</p>
        </div>
    </div>

    <div class="login-form-area">
        <h1>Bem-vindo</h1>
        <p class="subtitulo">Faça login para acessar o sistema</p>

        @if($errors->any())
            <div class="alerta-erro">E-mail ou senha incorretos.</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email"
                       id="email"
                       name="email"
                       value="{{ old('email') }}"
                       placeholder="seu@email.com"
                       autofocus>
                @error('email')
                    <span class="erro-campo">{{ $message }}</span>
                @enderror
            </div>

            <div class="campo">
                <label for="password">Senha</label>
                <input type="password"
                       id="password"
                       name="password"
                       placeholder="••••••••">
                @error('password')
                    <span class="erro-campo">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn-entrar">Entrar</button>
        </form>
    </div>

</div>

</body>
</html>
