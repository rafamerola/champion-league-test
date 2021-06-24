# About

Este repositório foi criado para um teste de emprego.

## Install
#### 1. Clone the repository

```bash
git clone https://github.com/rafamerola/champion-league-test.git
```

#### 2. Set .env
```bash
cp .env.example .env
```

#### 3. Install requirements
```bash
composer install
npm install
```

#### 4. Database Migrations
```bash
php artisan migrate
```
php artisan db:seed   

## Start Server
- Rode o servidor com o seguinte comando:
```
php artisan serve
```

## Para os testes aconselhavel utilização do POSTMAN

Lista de Requisições:

http://127.0.0.1:8000/jogadores/ - Listar TODOS OS JOGADORES (METODO GET)

http://127.0.0.1:8000/times/ - listar TODOS OS TIMES (METODO GET)

http://127.0.0.1:8000/jogos/ - listar TODOS OS JOGOS (METODO GET)

http://127.0.0.1:8000/jogadores/add - adiciona jogadores (METODO POST - PARAMETROS: name, description, number, team_id)

http://127.0.0.1:8000/times/add - Adiciona Times (METODO POST - PARAMETROS: name, image)

http://127.0.0.1:8000/jogos/add - Adiciona Jogos (METODO POST - PARAMETROS: house_team_id, guest_team_id, score_house_team, score_guest_team)

http://127.0.0.1:8000/jogadores/{ID} - Edita o jogador (METODO PUT - PASSANDO OS MESMOS PARAMETROS DE CADASTRO)

http://127.0.0.1:8000/times/{ID} - Edita o time (METODO PUT - PASSANDO OS MESMOS PARAMETROS DE CADASTRO)

http://127.0.0.1:8000/jogos/{ID} - Edita os jogos (METODO PUT - PASSANDO OS MESMOS PARAMETROS DE CADASTRO)

http://127.0.0.1:8000/times/{ID} - Remove o Time (METODO DELETE - PASSANDO O ID DO TIME QUE DESEJA EXCLUIR)

http://127.0.0.1:8000/jogadores/{ID} - Remove o Jogador (METODO DELETE - PASSANDO O ID DO JOGADOR QUE DESEJA EXCLUIR)

http://127.0.0.1:8000/jogos/{ID} - Remove a Partida (METODO DELETE - PASSANDO O ID DA PARTIDA QUE DESEJA EXCLUIR)
```