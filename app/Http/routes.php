<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-word', HelloWorldController::class . '@helloWorld');
Route::get('/hola-mundo', HelloWorldController::class . '@holaMundo');
