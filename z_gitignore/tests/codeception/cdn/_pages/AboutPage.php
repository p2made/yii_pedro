<?php

namespace tests\codeception\cdn\_pages;

use yii\codeception\BasePage;

/**
 * Represents about page
 * @property \codeception_cdn\AcceptanceTester|\codeception_cdn\FunctionalTester $actor
 */
class AboutPage extends BasePage
{
	public $route = 'site/about';
}
