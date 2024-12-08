<?php
/**
 * P2BootstrapIconsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Steppe West
 * @link https://steppewest.com/
 * @license MIT
 */

/**
 * @class \common\assets\P2BootstrapIconsAsset
 *
 * Load this asset with...
 * common\assets\P2BootstrapIconsAsset::register($this);
 *
 * use common\assets\P2BootstrapIconsAsset;
 * P2BootstrapIconsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'common\assets\P2BootstrapIconsAsset',
 */

namespace common\assets;

use yii\web\AssetBundle;

class P2BootstrapIconsAsset extends AssetBundle
{
	public $sourcePath = '@static/p2-bootstrap-icons';

	public $css = [
		'css/p2-bootstrap-icons.css',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	/**
	public $js = [
		'js/p2-bootstrap-icons.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];
	 */

	public $depends = [
		'common\assets\BootstrapIconsAsset',
	];
}
