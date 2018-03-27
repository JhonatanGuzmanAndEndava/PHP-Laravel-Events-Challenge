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

Just use XAMPP