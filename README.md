Step 1 install laravel
composer create-project --prefer-dist laravel/laravel:^7.0 blog

Step 2 Use Passport
composer require laravel/passport "~9.0"
php artisan migrate
php artisan passport:install

Step 3 Passport Configuration
In model app/user.php

/+ use Laravel\Passport\HasApiTokens;
/+ use HasApiTokens, Notifiable;

In app/Providers/AuthServiceProvider.php
/+ use Laravel\Passport\Passport;

In config/auth.php
/+ update api driver by passport

Step 4: Add Product Table and Model

php artisan make:migration create_products_table
/+ $table->string('name');
/+ $table->text('detail');

php artisan migrate

create product model app/Product.php

Step 5: Create API Routes
routes/api.php

Step 6: Create Controller Files

app/Http/Controllers/API/BaseController.php
app/Http/Controllers/API/RegisterController.php
app/Http/Controllers/API/ProductController.php

Step 7: Create Eloquent API Resources

php artisan make:resource Product
app/Http/Resources/Product.php

php artisan serve --port=9000
