<?php
return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'assetManager' => [
			'basePath' => '@cdn/web/assets',
			'baseUrl' => '//cdn.p2made.dev/assets',
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'sourcePath' => null,
					'js' => ['//code.jquery.com/jquery-1.11.2.min.js'],
				],
				'yii\bootstrap\BootstrapAsset' => [
					'sourcePath' => null,
					'css' => ['//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'sourcePath' => null,
					'js' => ['//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'],
				],
				'yii\jui\JuiAsset' => [
					'sourcePath' => null,
					'css' => ['//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css'],
					'js' => ['//code.jquery.com/ui/1.11.2/jquery-ui.min.js'],
				],
			],
		],
		'user' => [
			'class' => 'amnah\yii2\user\components\User',
		],
		'authManager' => [
			'class' => 'yii\rbac\DbManager',
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			//'enableStrictParsing' => true,
			'suffix' => '.p2m',
			'rules' => [
				// your rules go here
			],
		],
		'urlManagerCDN' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => '//cdn.p2made.dev',
		],
		'urlManagerBackEnd' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => '//hq.p2made.dev',
		],
		'urlManagerFrontEnd' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => '//p2made.dev',
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
	'modules' => [
		'user' => [
			'class' => 'amnah\yii2\user\Module',
			// set custom module properties here ...
		],
	],
];
