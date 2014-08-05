<?php 
$I = new FunctionalTester($scenario);
$I->am('a MowerMatcher member');
$I->wantTo('review all users who are registered for MowerMatcher');

$I->haveAnAccount(['username' => 'Foo']);
$I->haveAnAccount(['username' => 'Bar']);

$I->amOnPage('/users');
$I->see('Foo');
$I->see('Bar');