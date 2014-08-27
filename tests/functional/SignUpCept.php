<?php 

$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a MowerMatcher account');

$I->amOnPage('/');
$I->click('Register »');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'FooBar');
$I->fillField('Email:', 'foo@bar.com');
$I->fillField('Password:', 'password');
$I->fillField('Password Confirmation:', 'password');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');

$I->assertTrue(Auth::check());