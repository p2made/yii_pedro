<?php
/**
 * LandingPageFontsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\freelancer\LandingPageFontsAsset
 *
 * Load this asset with...
 * frontend\modules\freelancer\LandingPageFontsAsset::register($this);
 *
 * use frontend\modules\freelancer\LandingPageFontsAsset;
 * LandingPageFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\freelancer\LandingPageFontsAsset',
 */

namespace frontend\modules\freelancer;

class LandingPageFontsAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;
	public $baseUrl = '//fonts.googleapis.com';

	public $css = [
		'css?family=Lato:300,400,700,300italic,400italic,700italic',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'common\assets\P2MadeMetaAsset',
	];
}
