
Entorno de desarrllo : 
Laravel Framework 9.11.0
PHP 8.1.5 (cli) (built: Apr 19 2022 10:19:09) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.1.5, Copyright (c) Zend Technologies
    with Zend OPcache v8.1.5, Copyright (c), by Zend Technologies
Node version v14.19.2
Composer version 2.3.5 2022-04-13 16:43:00

Local workspace 
$ curl -LO https://raw.githubusercontent.com/bitnami/bitnami-docker-laravel/master/docker-compose.yml
$ docker-compose up

No necessay
Laravel Sanctum
SQLite

php artisan make:model PostalCode -mcr
php artisan make:model ZipCode -mcr
JSON Compare
https://jsoneditoronline.org/

composer require maatwebsite/excel

php artisan make:import PostalCodeImport --model=PostalCode

php artisan cache:clear
php artisan route:clear
php artisan view:clear
php artisan config:clear