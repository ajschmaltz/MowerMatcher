<?php
$I = new FunctionalTester($scenario);
$I->am('a MowerMatcher member');
$I->wantTo('I want to view my profile');

$I->signIn();
$I->postAMower('My new mower');

$I->click('Your Profile');
$I->seeCurrentUrlEquals('/@Foobar');

$I->see('My new mower');