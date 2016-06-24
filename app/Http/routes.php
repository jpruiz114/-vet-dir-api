<?php

Route::get('/', function () {
    return view('welcome');
});

/* ***** */

Route::get('/hello-word', HelloWorldController::class . '@helloWorld');
Route::get('/hola-mundo', HelloWorldController::class . '@holaMundo');

use App\Library\SearchHelper;

Route::group(
    ['prefix' => "test"],
    function() {
        Route::get(
            '/search-helper/km', function() {
                return SearchHelper::KILOMETER_SEARCH_UNIT;
            }
        );
    }
);

/* ***** */
