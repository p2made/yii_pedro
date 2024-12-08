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
 * frontend\assets\AppAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\assets\AppAsset',
 */

namespace frontend\assets;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@static/frontend';
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
