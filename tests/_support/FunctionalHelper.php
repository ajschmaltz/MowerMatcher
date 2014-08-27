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

  public function haveAnImage($overrides = [])
  {
    return $this->have('MowerMatcher\Images\Image', $overrides);
  }

  public function postAMower(
    $mower_make,
    $mower_model,
    $style,
    $use,
    $year,
    $cutting_width,
    $price,
    $engine_make,
    $engine_model,
    $hours,
    $body
  )
  {
    $I = $this->getModule('Laravel4');

    $I->fillField('mower_make', $mower_make);
    $I->fillField('mower_model', $mower_model);
    $I->fillField('style', $style);
    $I->fillField('use', $use);
    $I->fillField('year', $year);
    $I->fillField('cutting_width', $cutting_width);
    $I->fillField('price', $price);
    $I->fillField('engine_make', $engine_make);
    $I->fillField('engine_model', $engine_model);
    $I->fillField('engine_hours', $hours);
    $I->fillField('body', $body);

    $I->click('Post Mower');
  }
}