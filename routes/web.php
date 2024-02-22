<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{name?}/', function ($name='john') {
    return 'Nama saya '.$name;
});
