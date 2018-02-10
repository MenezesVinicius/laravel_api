# Laravel API

### Setup

`git clone https://github.com/MenezesVinicius/laravel_api laravel_api`

`cd laravel_api`

`composer install`

`php artisan migrate`

`php artisan serve`

### Métodos

* Método GET

Retornar todos os usuários: http://localhost:8000/api/usuarios
Retornar usuário específico: http://localhost:8000/api/usuarios/{id}

* Método POST

Inserir novo usuário: http://localhost:8000/api/usuarios

* Método PUT

Atualizar usuário: http://localhost:8000/api/usuarios/{id}

* Método DELETE

Deletar usuário: http://localhost:8000/api/usuarios/{id}
