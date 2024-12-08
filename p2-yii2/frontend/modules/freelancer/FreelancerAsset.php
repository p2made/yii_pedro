<?php
/**
 * FreelancerAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\freelancer\FreelancerAsset
 *
 * Load this asset with...
 * frontend\modules\freelancer\FreelancerAsset::register($this);
 *
 * use frontend\modules\freelancer\FreelancerAsset;
 * FreelancerAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\freelancer\FreelancerAsset',
 */

namespace frontend\modules\freelancer;

class FreelancerAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@frontend/modules/freelancer/lib';

	public $css = [
		'css/freelancer.min.css',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/freelancer.min.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'common\assets\P2MadeMetaAsset',
		'common\assets\P2FontAwesomeAsset',
		'frontend\modules\freelancer\FreelancerFontsAsset',
	];
}
