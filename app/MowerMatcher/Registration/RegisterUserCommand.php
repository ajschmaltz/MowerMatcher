<?php namespace MowerMatcher\Registration;

class RegisterUserCommand {

  public $username;

  public $email;

  public $password;

  function __construct($username, $email, $password)
  {
    $this->email = $email;
    $this->password = $password;
    $this->username = $username;
  }

}