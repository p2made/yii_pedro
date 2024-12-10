<?php
/**
 * LandingPageAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\landing-page\LandingPageAsset
 *
 * Load this asset with...
 * frontend\modules\landing-page\LandingPageAsset::register($this);
 *
 * use frontend\modules\landing-page\LandingPageAsset;
 * LandingPageAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\landing-page\LandingPageAsset',
 */

namespace frontend\modules\landing-page;

class LandingPageAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@frontend/modules/landing-page/lib';

	public $css = [
		'css/landing-page.min.css',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	/**
	public $js = [
		'js/landing-page.min.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];
	 */

	public $depends = [
		'common\assets\P2MadeMetaAsset',
		'common\assets\P2FontAwesomeAsset',
	];
}
