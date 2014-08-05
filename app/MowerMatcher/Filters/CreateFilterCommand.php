<?php namespace MowerMatcher\Filters;


class CreateFilterCommand {

  public $query;

  public $userId;

  function __construct($query, $userId)
  {
    $this->query = $query;
    $this->userId = $userId;
  }


}