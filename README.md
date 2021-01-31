

#Instalação

- git clone
- criação do banco de dados
- composer install
- php artisan migrate
- php artisan serve

#Caminhos

LISTA CEP CADASTRADOS NA BASE DE DADOS

- GET   http://127.0.0.1:8000/api/endereco

CADASTRAR ENDEREÇO

- POST  http://127.0.0.1:8000/api/endereco

EXEMPLO
  
  {
  "cep":"00000200",
  "bairro":"jorge texas",
  "estado":"AM",
  "cidade":"Manaus",
  "endereco":"rua 13 de maio nº 30",
  "numero":"30"
  }

ATUALIZAR ENDEREÇO CADASTRADO

- PUT  http://127.0.0.1:8000/api/endereco/<ID>

EXEMPLO
   
   {
   "cep": "24242424",
   "bairro": "Mteste",
   "estado": "AM",
   "cidade": "Manaus",
   "endereco": "rua 13 de maio nº 30",
   "numero": "30",
   "created_at": "2021-01-30T21:07:11.000000Z",
   "updated_at": "2021-01-30T21:07:11.000000Z"
   }

PESQUISAR ENDEREÇO POR ID

- SHOW   http://127.0.0.1:8000/api/endereco/<ID>

DELETAR ENDEREÇO POR ID

- DELETE  http://127.0.0.1:8000/api/endereco/4

# PESQUISAR

- http://127.0.0.1:8000/api/busca/cep/<CEP>

- http://127.0.0.1:8000/api/busca/<ESTADO>/<CIDADE>/<BAIRRO>
