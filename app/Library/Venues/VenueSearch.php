<?php

namespace App\Library\Venues;

use DB;

/**
 * Class VenueSearch
 */
class VenueSearch {
    /**
     *
     */
    const KILOMETER_SEARCH_UNIT = "Kilometers";

    /**
     *
     */
    const MILE_SEARCH_UNIT = "Miles";

    /**
     *
     */
    const EARTH_MEAN_RADIUS_KILOMETERS = 6371;

    /**
     *
     */
    const EARTH_MEAN_RADIUS_MILES = 3959;

    /**
     * @param $currentLat
     * @param $currentLng
     * @param $searchUnit
     * @param $categoryId
     * @param int $distance
     * @return array
     * @throws Exception
     */
    static public function findCloseVenues($currentLat, $currentLng, $searchUnit, $categoryId, $distance = 1)
    {
        if (empty($currentLat)) {
            throw new Exception("You must indicate the current latitude.");
        }

        if (empty($currentLng)) {
            throw new Exception("You must indicate the current longitude.");
        }

        if (empty($searchUnit)) {
            throw new Exception("You must indicate the search unit.");
        } else {
            if ($searchUnit != self::KILOMETER_SEARCH_UNIT && $searchUnit != self::MILE_SEARCH_UNIT) {
                throw new Exception("The only valid search units are kilometers and miles.");
            }
        }

        if (empty($categoryId)) {
            throw new Exception("You must indicate the category id.");
        }

        if ($searchUnit == self::KILOMETER_SEARCH_UNIT) {
            $earthRadius = self::EARTH_MEAN_RADIUS_KILOMETERS;
        }

        if ($searchUnit == self::MILE_SEARCH_UNIT) {
            $earthRadius = self::EARTH_MEAN_RADIUS_MILES;
        }

        $sqlInstruction = "";
        $sqlInstruction .= "SELECT ";
        $sqlInstruction .= "entity_id, ";
        $sqlInstruction .= "(%d * acos(cos(radians(%f)) * cos(radians(location_lat)) * cos(radians(location_lng) - radians(%f)) + sin(radians(%f)) * sin(radians(location_lat)))) AS distance ";
        $sqlInstruction .= "FROM venue ";
        $sqlInstruction .= "WHERE ";
        $sqlInstruction .= "category_id = %d ";
        $sqlInstruction .= "HAVING distance < %d ";
        $sqlInstruction .= "ORDER BY distance;";

        $sqlInstruction = sprintf(
            $sqlInstruction,
            $earthRadius, $currentLat, $currentLng, $currentLat, $categoryId, $distance
        );

        $results = DB::select(DB::raw($sqlInstruction));

        $venuesFound = array();

        $i = 0;

        foreach ($results as &$value) {
            $venuesFound[$i++] = array(
                "distance" => $value->distance,
                "detail" => Venue::where(array('entity_id' => $value->entity_id))->first()
            );
        }

        return $venuesFound;
    }
}
