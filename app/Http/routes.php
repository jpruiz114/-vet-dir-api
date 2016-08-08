<?php

Route::get('/', function () {
    return view('welcome');
});

use App\Library\Categories\Category;

use App\Library\Venues\VenueSearch;

Route::group(
    ['prefix' => 'test'],
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

Route::group(
    ['prefix' => 'v1'],
    function() {
        Route::get(
            'venues/{category}/params/{params}',
            function($category, $params) {
                $category = Category::where('foursquare_id_equivalent', $category)->get();

                $categoryId = $category->get('entity_id');
                return $categoryId;

                //$categoryStr = print_r($category, true);
                //return $categoryStr;

                /*$keyValArray = explode("&", $params);

                $paramsArray = array();

                for ($i=0; $i<sizeof($keyValArray); $i++) {
                    $currentPair = explode("=", $keyValArray[$i]);

                    if (sizeof($currentPair) == 2) {
                        $key = $currentPair[0];
                        $val = $currentPair[1];

                        $paramsArray[$key] = $val;
                    }
                }

                try {
                    $closeVenues = VenueSearch::findCloseVenues(
                        $paramsArray["lat"],
                        $paramsArray["lng"],
                        $paramsArray["unit"],
                        $category->entity_id,
                        $paramsArray["distance"]
                    );

                    return json_encode($closeVenues);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }*/
            }
        );
    }
);
