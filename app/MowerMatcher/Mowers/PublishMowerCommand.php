<?php namespace MowerMatcher\Mowers;


class PublishMowerCommand {

  public $body;

  public $cutting_width;

  public $engine_hours;

  public $engine_model;

  public $engine_make;

  public $imageIds;

  public $mower_make;

  public $mower_model;

  public $price;

  public $style;

  public $use;

  public $userId;

  public $year;

  function __construct($body, $cutting_width, $engine_hours, $engine_make, $engine_model, $imageIds = null, $mower_make, $mower_model, $price, $style, $use, $userId, $year)
  {
    $this->body = $body;
    $this->cutting_width = $cutting_width;
    $this->engine_hours = $engine_hours;
    $this->engine_make = $engine_make;
    $this->engine_model = $engine_model;
    $this->imageIds = $imageIds;
    $this->mower_make = $mower_make;
    $this->mower_model = $mower_model;
    $this->price = $price;
    $this->style = $style;
    $this->use = $use;
    $this->userId = $userId;
    $this->year = $year;
  }


} 