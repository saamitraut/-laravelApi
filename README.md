Step 1 install laravel
composer create-project --prefer-dist laravel/laravel:^7.0 blog

Step 2 Use Passport
composer require laravel/passport "~9.0"
php artisan migrate
php artisan passport:install

copy paste all files
it will replace 5 files
php artisan serve --port=9000
