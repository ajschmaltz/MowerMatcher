<?php 
$I = new FunctionalTester($scenario);
$I->am('a MowerMatcher member');
$I->wantTo('I want to post mowers to my profile');

$I->signIn();

$I->amOnPage('/mowers');
$I->postAMower('My first mower');

$I->seeCurrentUrlEquals('/mowers');
$I->see('My first mower');