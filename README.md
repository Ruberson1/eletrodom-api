# Eletrodom API

Esta é uma aplicação desenvolvida para um teste técnico, o qual os requisitos
você pode acompanhar clicando no [link](https://drive.google.com/file/d/1xY6EfiSDgJjQhrFCwiHQfL1fxTKg6S7i/view).


## REQUISITOS:

- Após clonar o repositório execute o comando:
```
composer update/install
```

- Certifique-se de preencher a string de conexão com o seu banco de dados no arquivo .env (retire o .example).
- Com o banco de dados criado execute o comando:
```
php artisan migrate
```
- O projeto já possui algumas seeders criadas execute o comando:
```
php artisan db:seed
```
- Em seguida suba o servidor do PHP com o comando:
```
php -S localhost:8000 -t public
```
