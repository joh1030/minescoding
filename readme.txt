CSCI 445 - Fall 2015 - Final Project

Admin user credentials:
username: randr@msn.com
password: ilikemusic

Refresh migrations & seed: php artisan migrate:refresh --seed

When cloned:
composer install
composer update
copy ".env.example" to ".env" and change credentials
php artisan key:generate
php artisan migrate
php artisan db:seed
