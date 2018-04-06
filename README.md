# Endava Events - PHP AM Challenge

This is the fourth AM Endava Challenge with Laravel framework

## Getting Start

First App - https://auth0.com/blog/creating-your-first-laravel-app-and-adding-authentication/ <br />
Laravel 5.6 Doc - https://laravel.com/docs/5.6

## Configuration

1. You must have [Composer](https://getcomposer.org/)

2. Then. Install Laravel with command

```
composer global require "laravel/installer"
```

3. Navigate until EndavaEvents. You have to install composer dependencies with:

For this step by sure you have git in path variable

```
composer install
composer update
```

It will be create a vendor folder for autoload

4. Be sure you have .env file in project with correct settings, specially in DB and MAIL

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nameofyourdatabase
DB_USERNAME=theuserofdb
DB_PASSWORD=thepasswordfordb

MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=gmailaccount
MAIL_PASSWORD=gmailpasswordaccount
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=The email you want to appear
MAIL_FROM_NAME=Message you want to appear
```

This file is not in repository, so you have to set up before running application. You can use .env.example for template

5. Generate the key with

```
php artisan key:generate
```

6. When you set up the database you have to run.   

```
php artisan migrate
```

Be sure you have successful conection with the database.

If you want to restart database. You have to run

```
php artisan migrate:refresh
```

This Project is using [Eloquent](https://laravel.com/docs/5.6/eloquent) 

7. Create symbolic link for storage

```
php artisan storage:link
```

Sometimes it is necessary clear cache

```
php artisan config:cache
```

## Running app

Just use XAMPP. Be sure Apache is pointing to **public** folder from project

## Useful Links

### Laravel Doc

[Laravel](https://laravel.com/docs/5.6) 

### Crud

Base - https://itsolutionstuff.com/post/laravel-56-crud-application-for-starterexample.html <br />
CRUD 1 (This is really good) - https://appdividend.com/2018/02/23/laravel-5-6-crud-tutorial <br />
CRUD 2 - https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers <br />
CRUD 3 - https://medium.com/@cesdash/crud-en-laravel-5-4-fadc5ce65918 <br />
CRUD 4 - https://medium.com/@sebazamorano/como-crear-un-crud-en-laravel-5-4-24dc0c8f7ba3 <br />


### Relationships 

One to many - https://appdividend.com/2018/01/04/laravel-one-to-many-relationship-tutorial <br />

### Admin role

Admin role - https://medium.com/justlaravel/how-to-use-middleware-for-content-restriction-based-on-user-role-in-laravel-2d0d8f8e94c6 <br />

### Upload files

Images - https://styde.net/sistema-de-archivos-y-almacenamiento-en-laravel-5/ <br />
Laravel Doc - https://laravel.com/docs/5.6/filesystem

### PDF Gen

PDF Provider for Laravel Install - https://github.com/barryvdh/laravel-dompdf
Using - https://styde.net/generar-pdf-en-laravel-5-1-con-dompdf/

### Export to CSV 

Use League in back - https://github.com/usmanhalalit/laracsv