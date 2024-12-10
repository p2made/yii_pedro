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
		'agency' => [
			 'class' => 'frontend\modules\agency\AgencyModule',
		],
		'grayscale' => [
			 'class' => 'frontend\modules\grayscale\GrayscaleModule',
		],
		'landing-page' => [
			 'class' => 'frontend\modules\landing-page\LandingPageModule',
		],
		'one-page-wonder' => [
			 'class' => 'frontend\modules\one-page-wonder\OnePageWonderModule',
		],
		'resume' => [
			 'class' => 'frontend\modules\resume\ResumeModule',
		],
	],
	'params' => $params,
];

/**
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
