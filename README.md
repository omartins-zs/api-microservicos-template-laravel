# Template de Microsserviços em Laravel

Este projeto é um template inicial (starter) para desenvolver APIs de microsserviços utilizando Laravel.

---

## 🚀 Pré-requisitos

Antes de começar, verifique se você possui instalado em sua máquina:

- PHP >= 8.0
- Composer
- Node.js >= 14.x
- NPM ou Yarn
- Extensões PHP: OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON

---

## 🔧 Instalação

1. Clone este repositório:
   ```bash
   git clone <URL_DO_REPOSITORIO>
   cd <NOME_DO_PROJETO>
   ```

2. Instale as dependências do PHP:
   ```bash
   composer install
   ```

3. Instale as dependências JavaScript:
   ```bash
   npm install
   # ou
   yarn install
   ```

4. Copie o arquivo de ambiente e configure as variáveis:
   ```bash
   cp .env.example .env
   ```

5. Gere a chave de aplicação:
   ```bash
   php artisan key:generate
   ```

6. Configure a conexão com o banco de dados no arquivo `.env`.

7. Rode as migrations e seeders:
   ```bash
   php artisan migrate --seed
   ```

---

## ⚙️ Scripts úteis

Dentro do diretório do projeto, você pode executar:

- **Iniciar servidor de desenvolvimento Laravel:**
  ```bash
  php artisan serve
  ```

- **Compilar assets front-end (mix):**
  ```bash
  npm run dev    # Desenvolvimento
  npm run build  # Produção
  ```

---

## 📄 Documentação Swagger

Este projeto inclui integração com o L5-Swagger para gerar a documentação da API.

- **Gerar documentação:**
  ```bash
  php artisan l5-swagger:generate
  ```

- Acesse a UI do Swagger em:
  ```bash
  http://localhost:8000/api/documentation
  ```

---

## 📑 Anotações

- Se precisar de mais informações sobre as anotações Swagger ou configurações, consulte o arquivo `Anotacao.txt` no diretório raiz.

---

## 📝 Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
