<?php
/**
 * AppAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * backend\assets\AppAsset::register($this);
 *
 * or specify as a dependency with...
 *     'backend\assets\AppAsset',
 */

namespace backend\assets;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@static/backend';
	//public $basePath = '@webroot';
	//public $baseUrl = '@web';
	public $css = [
		'css/site.min.css',
	];

	public $js = [
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap5\BootstrapAsset',
	];
}
