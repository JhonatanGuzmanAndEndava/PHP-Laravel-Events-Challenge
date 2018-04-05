# Endava Events - PHP AM Challenge

This is the fourth AM Endava Challenge with Laravel framework

## Configuration

Be sure you have .env file in project with correct settings, specially in DB and MAIL

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

This file is not in repository, so you have to set up before running application

## DataBase

When you set up the database you have to run 

```
php artisan migrate
```

This Project is using [Eloquent](https://laravel.com/docs/5.6/eloquent) 

## Running app

Just use XAMPP. Be sure Apache is pointing to public folder from project

## Useful Links

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

Images - https://styde.net/sistema-de-archivos-y-almacenamiento-en-laravel-5/
Laravel Doc - https://laravel.com/docs/5.6/filesystem