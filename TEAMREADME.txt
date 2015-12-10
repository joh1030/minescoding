user: root
db: csci445project

when running project on home computer for the first time, run the commands:

git clone https://github.com/EPond89/FinalProject445.git
cd FinalProject445
composer install
composer update
(copy or rename .env.example to .env)
php artisan key:generate
php artisan migrate
php artisan db:seed

Setup Local DB environement in .env (username and pass)

### cool trick!!! ###
Following command resets migrations, re-migrates, then re-seed all at once!
php artisan migrate:refresh --seed
