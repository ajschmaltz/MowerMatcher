<?php 
$I = new FunctionalTester($scenario);
$I->am('a MowerMatcher member');
$I->wantTo('login to my MowerMatcher account');

$I->signIn();

$I->seeInCurrentUrl('mowers');
$I->see('Welcome back!');
$I->assertTrue(Auth::check());