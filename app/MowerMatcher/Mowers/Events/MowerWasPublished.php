<?php namespace MowerMatcher\Mowers\Events;


class MowerWasPublished {

  public $body;

  function __construct($body)
  {
    $this->body = $body;
  }

} 