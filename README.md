# DEVOPS- Free Gamelist

## _Sua lista de jogos gratuita!_

O Free Gamelist é um serviço que te permite descobrir e salvar diversos jogos gratuitos para seu entretenimento!

Requisitos:

- Docker

## Funcionalidades

### Homescreen

![Homescreen](https://i.imgur.com/5EYPnyH.jpg)

1. Botão "My Gamelist" vai até a tela de jogos salvos.
2. Display com informações do jogo aleatório, contendo os botões "Go to Page" e "Add to List".
3. Botão "Go to Page" para ir até o site do jogo.
4. Botão "Add to List" para adicionar o jogo na sua lista.
5. Botão "Check Another Game" para recomendar outro jogo gratuito aleatoriamente.

### Gamelist

![Gamelist](https://i.imgur.com/xo6eVMl.jpg)

1. Botão "Discover new games..." vai até a tela inicial e te recomenda um jogo gratuito aleatório.
2. Display da tabela com os seus jogos salvos , contendo seletor de itens, bara de busca, seletor de página, imagem, nome, gênero, descrição e botões de ação "Link" e "Delete".
3. Botão "Link" para ir até o site do jogo.
4. Botão "Delete" para deletar o jogo da sua lista.

## Arquitetura

![Arquitetura](https://i.imgur.com/AX8BJsB.pnghttps://i.imgur.com/8QQYwzS.png)
No nosso serviço o endpoint contém uma lista de games gratuitos; quando chamamos em nossa aplicação, ele escolhe aleatoriamente um jogo da lista e nos disponibiliza.

## Instalação

Na pasta raíz do projeto, siga as seguintes instruções;

```sh
docker-compose build app
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app php artisan migrate
docker-compose exec app php artisan key:generate
```

Para utilizar o serviço é necessário ir até ``localhost:8000`` no navegador.
Talvez seja necessário adicionar um `` sudo`` antes das instruções caso seu sistema seja linux.

## Sobre o projeto

Foi desenvolvido em ambiente Windows (Docker Desktop) com ``docker`` e ``docker-compose``, utilizando, primariamente, as seguintes tecnologias:

- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)
- [Bootstrap](https://getbootstrap.com/)
- [Javascript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)
