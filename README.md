# Sistema de Vendas — Laravel 10

Sistema com login, clientes, produtos e vendas. Preto, cinza e vermelho.

---

## Instalação passo a passo

### 1. Entre na pasta do projeto
```bash
cd laravel_vendas
```

### 2. Instale as dependências
```bash
composer install
```

### 3. Crie o arquivo .env
```bash
cp .env.example .env
```

### 4. Gere a chave da aplicação
```bash
php artisan key:generate
```

### 5. Configure o banco de dados no .env
Abra o arquivo `.env` e edite:
```
DB_DATABASE=sistema_vendas
DB_USERNAME=root
DB_PASSWORD=sua_senha
```

### 6. Crie o banco e rode as migrations + seeder
```bash
php artisan migrate --seed
```

### 7. Suba o servidor
```bash
php artisan serve
```

Acesse: **http://localhost:8000**

---

## Login padrão
- **E-mail:** admin@sistema.com
- **Senha:** password

---

## Onde colocar as imagens

Crie a pasta `public/images/` e coloque:

| Arquivo | Onde aparece | Tamanho |
|---|---|---|
| `logo.png` | Sidebar superior esquerda | 160×40px |
| `login-bg.jpg` | Painel esquerdo do login | 400×480px |
| `icone-clientes.png` | Card do dashboard | 48×48px |
| `icone-produtos.png` | Card do dashboard | 48×48px |
| `icone-vendas.png` | Card do dashboard | 48×48px |
| `produtos/{id}.jpg` | Tabela de produtos (por ID) | 60×60px |

Para ativar, descomentar as linhas com `{{-- ... --}}` nas views correspondentes.

---

## Estrutura das páginas

- `/login` → Tela de login
- `/` → Dashboard com totais e últimas vendas
- `/clientes` → CRUD de clientes
- `/produtos` → CRUD de produtos
- `/vendas` → CRUD de vendas
