<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/hello-word',
    HelloWorldController::class . '@helloWorld'
);
