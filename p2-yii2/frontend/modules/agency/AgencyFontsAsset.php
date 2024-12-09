<?php
/**
 * FreelancerFontsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\freelancer\FreelancerFontsAsset
 *
 * Load this asset with...
 * frontend\modules\freelancer\FreelancerFontsAsset::register($this);
 *
 * use frontend\modules\freelancer\FreelancerFontsAsset;
 * FreelancerFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\freelancer\FreelancerFontsAsset',
 */

namespace frontend\modules\freelancer;

class FreelancerFontsAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;
	public $baseUrl = '//fonts.googleapis.com';

	public $css = [
		'css?family=Montserrat:400,700',
		'css?family=Lato:400,700,400italic,700italic',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'common\assets\P2MadeMetaAsset',
	];
}
