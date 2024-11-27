<?php

namespace tests\codeception\cdn\_pages;

use yii\codeception\BasePage;

/**
 * Represents contact page
 * @property \codeception_cdn\AcceptanceTester|\codeception_cdn\FunctionalTester $actor
 */
class ContactPage extends BasePage
{
	public $route = 'site/contact';

	/**
	 * @param array $contactData
	 */
	public function submit(array $contactData)
	{
		foreach ($contactData as $field => $value) {
			$inputType = $field === 'body' ? 'textarea' : 'input';
			$this->actor->fillField($inputType . '[name="ContactForm[' . $field . ']"]', $value);
		}
		$this->actor->click('contact-button');
	}
}
