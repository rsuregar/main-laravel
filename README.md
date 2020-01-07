<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## How to use
`git clone https://github.com/rsuregar/main-laravel.git`

`cd main-laravel` and run `composer install`

create database on your phpmyadmin with name `db_laravel`

run `php artisan migrate`

run `php artisan db:seed --class:refKategoriBarangSeeder` to generate dummy data

run `php artisan db:seed --class:UserSeed` to generate dummy users

