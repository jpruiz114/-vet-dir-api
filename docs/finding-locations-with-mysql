# Finding Locations with MySQL

## Brief explanation

To find locations in your markers table that are within a certain radius distance of a given latitude/longitude, you can use a SELECT statement based on the Haversine formula. The Haversine formula is used generally for computing great-circle distances between two pairs of coordinates on a sphere. An in-depth mathemetical explanation is given by Wikipedia and a good discussion of the formula as it relates to programming is on Movable Type's site.

Here's the SQL statement that will find the closest 20 locations that are within a radius of 25 miles to the 37, -122 coordinate. It calculates the distance based on the latitude/longitude of that row and the target latitude/longitude, and then asks for only rows where the distance value is less than 25, orders the whole query by distance, and limits it to 20 results. To search by kilometers instead of miles, replace 3959 with 6371.

```
SELECT id, ( 3959 * acos( cos( radians(37) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(-122) ) + sin( radians(37) ) * sin( radians( lat ) ) ) ) AS distance FROM markers HAVING distance < 25 ORDER BY distance LIMIT 0 , 20;
```

## Useful links

https://developers.google.com/maps/articles/phpsqlsearch_v3#findnearsql

https://en.wikipedia.org/wiki/Haversine_formula

http://www.movable-type.co.uk/scripts/latlong.html
