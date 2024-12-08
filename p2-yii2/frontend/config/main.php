<?php
/**
 * app/frontend/config/main.php
 */
$params = array_merge(
	require __DIR__ . '/../../common/config/params.php',
	require __DIR__ . '/../../common/config/params-local.php',
	require __DIR__ . '/params.php',
	require __DIR__ . '/params-local.php'
);

return [
	'id' => 'app-frontend',
	'name' => 'p2made', // Set the application name here
	'basePath' => dirname(__DIR__),
	'bootstrap' => ['log'],
	'controllerNamespace' => 'frontend\controllers',
	'components' => [
		'urlManager' => [
			'rules' => [
				'' => 'freelancer/freelancer/view',
			],
		],
		'request' => [
			'csrfParam' => '_csrf-frontend',
		],
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
			'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
		],
		'session' => [
			// this is the name of the session cookie used for login on the frontend
			'name' => 'pedro-frontend',
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => \yii\log\FileTarget::class,
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
	],
	'modules' => [
		'freelancer' => [
			 'class' => 'frontend\modules\freelancer\FreelancerModule',
		],
	],
	'params' => $params,
];

/**
frontend/modules/freelancer/lib/css/freelancer.css
frontend/modules/freelancer/lib/css/freelancer.min.css
frontend/modules/freelancer/lib/img/avataaars.svg
frontend/modules/freelancer/lib/img/portfolio/
frontend/modules/freelancer/lib/img/portfolio/cabin.png
frontend/modules/freelancer/lib/img/portfolio/cake.png
frontend/modules/freelancer/lib/img/portfolio/circus.png
frontend/modules/freelancer/lib/img/portfolio/game.png
frontend/modules/freelancer/lib/img/portfolio/safe.png
frontend/modules/freelancer/lib/img/portfolio/submarine.png
frontend/modules/freelancer/lib/js/freelancer.js
frontend/modules/freelancer/lib/js/freelancer.min.js
frontend/modules/freelancer/FreelancerAsset.php
frontend/modules/freelancer/FreelancerController.php
frontend/modules/freelancer/FreelancerModule.php
frontend/modules/freelancer/views/index.php
frontend/modules/freelancer/views/layouts/
frontend/modules/freelancer/views/layouts/main.php
frontend/modules/freelancer/views/site/about.php
frontend/modules/freelancer/views/site/contact.php
frontend/modules/freelancer/views/site/error.php
frontend/modules/freelancer/views/site/index.php
frontend/modules/freelancer/views/site/login.php
 */

		/**
		'view' => [
			'theme' => [
				'pathMap' => [
					'@app/views' => '@app/views/freelancer'
				],
			],
		],
		 */
