<?php namespace Codeception\Module;

use Laracasts\TestDummy\Factory as TestDummy;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module {

  public function signIn()
  {
    $email = 'foo@example.com';
    $username = 'Foobar';
    $password = 'foo';
    $this->haveAnAccount(compact('username', 'email', 'password'));

    $I = $this->getModule('Laravel4');

    $I->amOnPage('/login');
    $I->fillField('email', $email);
    $I->fillField('password', $password);
    $I->click('Sign In');
  }

  public function have($modal, $overrides = [])
  {
    return TestDummy::create($modal, $overrides);
  }

  public function haveAnAccount($overrides = [])
  {
    return $this->have('MowerMatcher\Users\User', $overrides);
  }

  public function postAMower($body)
  {
    $I = $this->getModule('Laravel4');

    $I->fillField('body', $body);
    $I->click('Post Mower');
  }
}