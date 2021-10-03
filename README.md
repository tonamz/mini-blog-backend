# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### Setup
---
Clone the repo and follow below steps.
1. Run `composer install`
2. Copy `.env.example` to `.env` Example for linux users : `cp .env.example .env`
3. Set `APP_KEY`, `JWT_SECRET`, and  `JWT_EXPIRE_HOUR` on `.env`
4. Set valid database credentials of env variables `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`
5. Run `php artisan migrate`
6. Run `php artisan db:seed`
7. Run the command `php -S localhost:8000 -t public`

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Documentation


User/Author
____________________________

Login

HTTP request
POST http://localhost:8000/api/user/login

Request headers
- Content-Type application/json

Request body
- Json
{
    "username": "",
    "password": ""
}


Article
____________________________

Add Article

HTTP request
POST http://localhost:8000/api/article/add

Request headers
- Authorization {api_token from login}
- Content-Type application/json

Request body
- Json
{
    "name":"",
    "status":"",
    "content":"",
    "category":""
}

___

Edit Article

HTTP request
PUT http://localhost:8000/api/article/edit/{id}

Request headers
- Authorization {api_token from login}
- Content-Type application/json

Request body
- Json
{
    "name":"",
    "status":"",
    "content":"",
    "category":""
}

___

Delete Article

HTTP request
DELETE http://localhost:8000/api/article/delete/{id}

Request headers
- Authorization {api_token from login}
- Content-Type application/json

___

Get Articles

HTTP request
GET http://localhost:8000/api/articles


