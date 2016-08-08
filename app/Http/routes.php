<?php

Route::get('/', function () {
    return view('welcome');
});

/* ***** */

Route::get('/hello-word', HelloWorldController::class . '@helloWorld');
Route::get('/hola-mundo', HelloWorldController::class . '@holaMundo');

use App\Library\Venues\VenueSearch;

Route::group(
    ['prefix' => "test"],
    function() {
        Route::get(
            '/venue-search/km', function() {
                return VenueSearch::KILOMETER_SEARCH_UNIT;
            }
        );

        Route::get(
            '/venue-search/mi', function() {
                return VenueSearch::MILE_SEARCH_UNIT;
            }
        );
    }
);

/* ***** */
