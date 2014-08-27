<?php
$I = new FunctionalTester($scenario);
$I->am('a MowerMatcher member');
$I->wantTo('I want to view my profile');

$I->signIn();
$I->amOnPage('/sell');
$I->postAMower(
  'Toro',
  'TimeCutter',
  'Zero Turn',
  'Residential',
  '2004',
  '42',
  '1500',
  'Kohler',
  'Courage',
  '400',
  'My first mower'
);

$I->click('Your Profile');
$I->seeCurrentUrlEquals('/@Foobar');
