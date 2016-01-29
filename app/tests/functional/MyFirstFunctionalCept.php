<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('verify the home page');
$I->amOnPage('/');
$I->see('hello there');
