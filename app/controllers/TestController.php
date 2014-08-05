<?php

use MowerMatcher\Geo\GeoRepository;

class TestController extends BaseController {

  private $geoRepository;

  function __construct(GeoRepository $geoRepository)
  {
    $this->geoRepository = $geoRepository;
  }

  public function test()
  {
    return $this->geoRepository->geocodeToLatLon('618 Butler St.');
  }

} 