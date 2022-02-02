<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');