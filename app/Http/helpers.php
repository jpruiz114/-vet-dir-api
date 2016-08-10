<?php

/**
 * @param $params
 * @return array
 */
function getParamsArray($params)
{
    $keyValArray = explode("&", $params);

    $paramsArray = array();

    for ($i=0; $i<sizeof($keyValArray); $i++) {
        $currentPair = explode("=", $keyValArray[$i]);

        if (sizeof($currentPair) == 2) {
            $key = $currentPair[0];
            $val = $currentPair[1];

            $paramsArray[$key] = $val;
        }
    }

    return $paramsArray;
}
