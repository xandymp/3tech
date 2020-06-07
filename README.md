## Instalação do Projeto

Para rodar o projeto é necessário instalar os seguintes recursos:

- Composer
- PHP
- APACHE
- MySQL

Após instalar as ferramentas, basta seguir os passos abaixo para rodar o projeto sem problemas

- Entrar pelo terminal na pasta do projeto e executar o comando composer install
- Feito isso é necessário criar o banco de dados e configurar o arquivo .env na raiz do projeto
- Assim que configurado o arquivo .env basta rodar o comando ```php artisan migrate --seed```
- Então basta acessar o projeto conforme sua configuração do APACHE
