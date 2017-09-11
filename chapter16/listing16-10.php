//<?php

// create connection to memory cache
$memcache = new Memcache;
$memcache->connect('localhost', 11211)
or die ("Could not connect to memcache server");

$cacheKey = 'topCountries';
/* If cached data exists retrieve it, otherwise generate and cache
   it for next time */
$countries = $memcache->get($cacheKey);
if ( ! isset($countries) ) {
  
  // since every page displays list of top countries as links
  // we will cache the collection
  
  // first get collection from database
  $cgate = new CountryTableGateway($dbAdapter);
  $countries = $cgate->getMostPopular();
  
  // now store data in the cache (data will expire in 240 seconds)
  $memcache->set($cacheKey, $countries, false, 240)
    or die ("Failed to save cache data at the server");
}
// now use the country collection
displayCountryList($countries);

?>
