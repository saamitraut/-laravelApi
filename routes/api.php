<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('register', 'API\RegisterController@register');

Route::post('login', 'API\RegisterController@login');

Route::middleware('auth:api')->group( function () {

    Route::resource('products', 'API\ProductController');

});