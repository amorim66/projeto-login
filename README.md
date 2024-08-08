
# Projeto de Login e Registro de Usuários

Este projeto é uma aplicação web simples que permite o registro e login de usuários, com acesso restrito a determinadas páginas para usuários autenticados. Ele foi desenvolvido como um teste para uma vaga de estágio.

## Funcionalidades

- Registro de novos usuários com validação de nome de usuário único.
- Login de usuários com autenticação via sessão.
- Área restrita acessível apenas para usuários autenticados.
- Logout para encerrar a sessão do usuário.
- Conexão com banco de dados para persistência de dados de usuários.

## Tecnologias Utilizadas

- **PHP**: Utilizado para a lógica do servidor e manipulação de dados.
- **MySQL**: Banco de dados utilizado para armazenar informações de usuários.
- **HTML/CSS**: Estrutura e estilização das páginas.
- **JavaScript**: Funcionalidades adicionais e validações no lado do cliente.

## Estrutura do Projeto

```plaintext
projeto/
│
├── index.php
├── login.php
├── logout.php
├── process_login.php
├── process_register.php
├── register.php
├── restricted_area.php
├── validate_username.php
│
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── img/
│   │   ├── logo.png
│   │   ├── product1.jpg
│   │   ├── product2.jpg
│   │   ├── product3.jpg
│   │   ├── slider1.jpg
│   │   ├── slider2.jpg
│   │   └── slider3.jpg
│   └── js/
│       └── scripts.js
│
├── includes/
│   ├── db_connect.php
│   ├── footer.php
│   └── header.php
│
└── templates/
    ├── login_form.php
    ├── registration_form.php
    └── restricted_area.php
```

### Descrição dos Arquivos

- **index.php**: Página inicial do projeto, ponto de entrada para o site.
- **login.php**: Carrega o formulário de login e trata mensagens de erro.
- **logout.php**: Script que realiza o logout e redireciona o usuário.
- **process_login.php**: Valida as credenciais do usuário e inicia a sessão.
- **process_register.php**: Processa o registro de novos usuários e insere os dados no banco de dados.
- **register.php**: Carrega o formulário de registro de novos usuários.
- **restricted_area.php**: Página restrita que verifica a sessão do usuário.
- **validate_username.php**: Verifica se o nome de usuário já existe no banco de dados.
- **assets/**: Contém arquivos de estilo CSS, imagens e scripts JavaScript.
- **includes/**: Scripts comuns, como conexão ao banco de dados e templates de cabeçalho e rodapé.
- **templates/**: Templates HTML reutilizáveis para formulários e áreas restritas.

## Configuração do Projeto

### Requisitos

- **PHP 7.4+**
- **MySQL 5.7+**
- Servidor Apache ou Nginx

### Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/usuario/projeto-login.git
   ```

2. Navegue até o diretório do projeto:
   ```bash
   cd projeto-login
   ```

3. Configure o banco de dados:
   - Crie um banco de dados no MySQL.
   - Execute o script SQL fornecido em `db.sql` para criar as tabelas necessárias.

4. Configure a conexão com o banco de dados:
   - Edite o arquivo `includes/db_connect.php` com suas credenciais do MySQL.

5. Execute o servidor PHP:
   ```bash
   php -S localhost:8000
   ```

6. Acesse a aplicação em `http://localhost:8000`.

## Contribuição

Sinta-se à vontade para contribuir com melhorias, correções de bugs ou novas funcionalidades. Abra uma *issue* ou envie um *pull request* com suas sugestões.

## Licença

Este projeto é distribuído sob a licença MIT. Consulte o arquivo LICENSE para mais informações.

