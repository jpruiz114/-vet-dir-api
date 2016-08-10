<?php

use App\Library\Categories\Category;
use App\Library\Venues\VenueSearch;

Route::group(
    ['prefix' => 'api'],
    function() {
        Route::get(
            'venues/{category}/params/{params}',
            function($category, $params) {
                $category = Category::where(array('foursquare_id_equivalent' => $category))->first();

                $paramsArray = getParamsArray($params);

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
                }
            }
        );
    }
);
