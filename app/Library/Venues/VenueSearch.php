<?php

namespace App\Library\Venues;

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
     * @param $venueId
     * @return mixed
     * @throws Exception
     */
    static public function getVenueDetail($venueId)
    {
        if (empty($venueId)) {
            throw new Exception("You must indicate the venue id.");
        }

        $venue = Venue::findOrFail($venueId);

        return $venue;
    }

    /**
     * @param $currentLat
     * @param $currentLng
     * @param $searchUnit
     * @param $categoryId
     * @param int $distance
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

        /*$sqlInstruction = "";
        $sqlInstruction .= "SELECT ";
        $sqlInstruction .= "entity_id, ";
        $sqlInstruction .= "($earthRadius * acos(cos(radians($currentLat)) * cos(radians(location_lat)) * cos(radians(location_lng) - radians($currentLng)) + sin(radians($currentLat)) * sin(radians(location_lat)))) AS distance ";
        $sqlInstruction .= "FROM venue ";
        $sqlInstruction .= "WHERE ";
        $sqlInstruction .= "category_id = $categoryId ";
        $sqlInstruction .= "HAVING distance < $distance ";
        $sqlInstruction .= "ORDER BY distance;";

        $this->connect();

        $this->increaseInteractiveTimeoutTrait();
        $this->increaseWaitTimeoutTrait();

        $result = mysql_query($sqlInstruction);

        $this->disconnect();

        $venuesFound = array();

        $i = 0;

        while($row = mysql_fetch_array($result)) {
            $entityId = $row["entity_id"];
            $distance = $row["distance"];

            $venuesFound[$i++] = array("distance" => $distance, "detail" => $this->getVenueDetail($entityId));
        }

        return $venuesFound;*/
    }

    public function findCloseVeterinaries($currentLat, $currentLng, $searchUnit, $distance)
    {
        /*$veterinaryFoursquareCategoryId = Foursquare_VeterinaryCategoriesHelper::FOURSQUARE_VETERINARIAN_CATEGORY_ID;

        $categoryModel = new Foursquare_CategoryModel();

        $veterinaryCategoryId = $categoryModel->getCategoryIdForFoursquareCategory($veterinaryFoursquareCategoryId);

        $categoryModel = null;

        $venuesFound = $this->findCloseVenues($currentLat, $currentLng, $searchUnit, $veterinaryCategoryId, $distance);

        return $venuesFound;*/
    }

    public function getVenuesByCategory($category) {
        /*if (empty($category)) {
            throw new Exception("You must indicate the category.");
        }

        $acceptedCategories = array(
            Foursquare_VeterinaryCategoriesHelper::FOURSQUARE_PET_SERVICE_CATEGORY_ID,
            Foursquare_VeterinaryCategoriesHelper::FOURSQUARE_PET_STORE_CATEGORY_ID,
            Foursquare_VeterinaryCategoriesHelper::FOURSQUARE_VETERINARIAN_CATEGORY_ID
        );

        if (!in_array($category, $acceptedCategories)) {
            throw new Exception("The given category isn't valid.");
        }

        $categoryModel = new Foursquare_CategoryModel();

        // Get the equivalent for the category.
        $categoryId = $categoryModel->getCategoryIdForFoursquareCategory($category);

        $sqlInstruction = "";
        $sqlInstruction .= "SELECT ";
        $sqlInstruction .= "entity_id ";
        $sqlInstruction .= "FROM venue ";
        $sqlInstruction .= "WHERE ";
        $sqlInstruction .= "category_id = $categoryId;";

        $this->connect();

        $result = mysql_query($sqlInstruction);

        $this->disconnect();

        $venues = array();

        $i = 0;

        while($row = mysql_fetch_array($result)) {
            $entityId = $row["entity_id"];

            $venue = $this->getVenueDetail($entityId);

            $venues[$i++] = $venue;
        }

        return $venues;*/
    }
}
