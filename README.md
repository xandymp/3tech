## Instalação do Projeto

Para rodar o projeto é necessário instalar os seguintes recursos:

- Composer
- PHP
- APACHE
- MySQL

Após instalar as ferramentas, basta seguir os passos abaixo para rodar o projeto sem problemas

- Entrar pelo terminal na pasta do projeto e executar o comando ```composer install```
- Feito isso é necessário criar o banco de dados e configurar o arquivo .env na raiz do projeto
- Assim que configurado o arquivo .env basta rodar o comando ```php artisan migrate --seed```

Assim que realizados todos os passos já vai ser possível visualizar o projeto pelo navegador

## Rotas de API

Segue abaixo a lista das rotas disponíveis da API

- GET /api/products (Para visualização da lista de produtos)
- GET /api/products/{id} (Para visualização apenas de um produto)
- POST /api/products (Para inserção de um novo produto)
- PUT /api/products/{id} (Para edição dos dados do produto informado)
- DELETE /api/products/{id} (Para exclusão de um produto)

Onde é exibido {id} trocar pelo id do produto desejado.
