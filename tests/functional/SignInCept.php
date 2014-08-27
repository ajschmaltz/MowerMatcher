<?php 
$I = new FunctionalTester($scenario);
$I->am('a MowerMatcher member');
$I->wantTo('login to my MowerMatcher account');

$I->signIn();

$I->assertTrue(Auth::check());