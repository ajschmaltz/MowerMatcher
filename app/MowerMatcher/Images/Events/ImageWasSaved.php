<?php namespace MowerMatcher\Images\Events;

use MowerMatcher\Images\Image;


class ImageWasSaved {

  public $body;

  function __construct(Image $image)
  {
    $this->image = $image;
  }

} 