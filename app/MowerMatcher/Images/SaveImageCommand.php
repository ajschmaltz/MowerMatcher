<?php namespace MowerMatcher\Images;


class SaveImageCommand {

  public $filename;

  public $uid;

  public $userId;

  function __construct($filename, $userId)
  {
    $this->filename = $filename;
    $this->userId = $userId;
  }

} 