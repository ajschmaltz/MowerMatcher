<?php namespace MowerMatcher\Geo;

use Geocoder\Geocoder;
use Geocoder\HttpAdapter\CurlHttpAdapter;
use Geocoder\Provider\GoogleMapsProvider;

class GeoRepository {

  private $geocoder;

  function __construct(Geocoder $geocoder)
  {
    $this->geocoder = $geocoder->registerProvider(new GoogleMapsProvider(new CurlHttpAdapter()));
  }

  /**
   * Geocode a location
   *
   * @param $location
   * @return mixed
   */
  public function geocodeToLatLon($location)
  {
    $result = $this->geocoder->geocode($location);
    return array($result->getLatitude(), $result->getLongitude());
  }

}