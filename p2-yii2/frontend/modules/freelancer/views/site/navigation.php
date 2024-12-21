<?php
/**
 * @frontend/modules/freelancer/views/site/navigation.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/** @var \yii\web\View $this */

use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

NavBar::begin([
	'brandLabel' => $this->params['title'],
	'brandUrl' => '#page-top',
	'options' => [
		'class' => 'navbar navbar-expand-lg bg-secondary fixed-top',
		'id' => 'mainNav',
	],
]);

echo Nav::widget([
	'options' => ['class' => 'navbar-nav ms-auto'],
	'items' => [
		[
			'label' => 'Portfolio',
			'url' => '#portfolio',
			'linkOptions' => ['class' => 'nav-link py-3 px-0 px-lg-3 rounded'],
		],
		[
			'label' => 'About',
			'url' => '#about',
			'linkOptions' => ['class' => 'nav-link py-3 px-0 px-lg-3 rounded'],
		],
		[
			'label' => 'Contact',
			'url' => '#contact',
			'linkOptions' => ['class' => 'nav-link py-3 px-0 px-lg-3 rounded'],
		],
	],
]);

NavBar::end();
