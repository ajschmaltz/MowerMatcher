<?php namespace MowerMatcher\Registration\Events;

use MowerMatcher\Users\User;

class UserRegistered {
  
  public $user;
  
  function __construct(User $user)
  {
    $this->user = $user; 
  }
  
}