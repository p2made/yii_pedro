<?php
/**
 * P2FontAwesomeAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Steppe West
 * @link https://steppewest.com/
 * @license MIT
 */

/**
 * @class \common\assets\P2FontAwesomeAsset
 *
 * Load this asset with...
 * common\assets\P2FontAwesomeAsset::register($this);
 *
 * use common\assets\P2FontAwesomeAsset;
 * P2FontAwesomeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'common\assets\P2FontAwesomeAsset',
 */

namespace common\assets;

use yii\web\AssetBundle;

class P2FontAwesomeAsset extends AssetBundle
{
	public $sourcePath = null;
	public $baseUrl = '//use.fontawesome.com/releases/v6.3.0/';
	public $js = [
		'js/all.js',
	];
	public $cssOptions = [
		'integrity' => 'sha384-QM3vQ1ro1SUguF26PKxC17ZxibTi/ixpgL9NRL5/RHw1AmA0pfSeGCh6k+uqbyzJ',
		'crossorigin' => 'anonymous',
	];
}
