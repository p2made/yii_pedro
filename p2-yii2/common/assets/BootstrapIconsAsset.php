<?php
/**
 * BootstrapIconsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Steppe West
 * @link https://steppewest.com/
 * @license MIT
 */

/**
 * @class \common\assets\BootstrapIconsAsset
 *
 * Load this asset with...
 * common\assets\BootstrapIconsAsset::register($this);
 *
 * use common\assets\BootstrapIconsAsset;
 * BootstrapIconsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'common\assets\BootstrapIconsAsset',
 */

namespace common\assets;

use yii\web\AssetBundle;

class BootstrapIconsAsset extends AssetBundle
{
	public $sourcePath = null;
	public $baseUrl = '//cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/';
	public $css = [
		'bootstrap-icons.css',
	];
	public $cssOptions = [
		'integrity' => 'sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD',
		'crossorigin' => 'anonymous',
	];
}
