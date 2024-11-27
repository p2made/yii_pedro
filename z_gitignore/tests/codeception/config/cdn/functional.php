<?php
$_SERVER['SCRIPT_FILENAME'] = cdn_ENTRY_FILE;
$_SERVER['SCRIPT_NAME'] = cdn_ENTRY_URL;

/**
 * Application configuration for cdn functional tests
 */
return yii\helpers\ArrayHelper::merge(
	require(YII_APP_BASE_PATH . '/common/config/main.php'),
	require(YII_APP_BASE_PATH . '/common/config/main-local.php'),
	require(YII_APP_BASE_PATH . '/cdn/config/main.php'),
	require(YII_APP_BASE_PATH . '/cdn/config/main-local.php'),
	require(dirname(__DIR__) . '/config.php'),
	require(dirname(__DIR__) . '/functional.php'),
	require(__DIR__ . '/config.php'),
	[
	]
);
