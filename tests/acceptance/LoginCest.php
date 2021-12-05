<?php

class LoginCest
{
  public function loginTest(AcceptanceTester $I)
    {
		$I->amOnPage('/lk');
		$I->fillField('login', 'Елена 25\Helen&');
		$I->fillField('passwd', '123');
		$I->click('Вход');
		$I->see('Иванова Елена Ивановна, здравствуйте! Спасибо, что пришли к нам снова!');
    }
}