
# Desafio dev

Desafio técnico.

## 1. Instalação

Após clonar o projeto, use o Composer para instalar as dependências.
```bash
composer install
```

## 2. Arquivo de configuração
Para configurar o serviço é so criar uma cópia do arquivo **'env.example'** e renomear para **'.env'** na raíz do projeto, e configurar o as configurações de banco de dados:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=desafio-dev
DB_USERNAME=root
DB_PASSWORD=
```

## 3. Criando as tabelas no banco
Após configurar o banco local, para criar as tabelas e popular o banco de dados executar o comando abaixo:

```bash
php artisan migrate --seed
```

## 4. Iniciando o serviço
Após criar as tabelas no banco, é so iniciar o serviço executando o comando abaixo na raíz do projeto

```bash
php artisan serve
```

## 5. Cadastrar CNAB
Para acessar o formulário é so acessar seu serviço local

```bash
http://127.0.0.1:8000
```