<?php
/**
 * @frontend/modules/freelancer/assets/P2FreelancerAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\freelancer\assets\P2FreelancerAsset
 *
 * Load this asset with...
 * frontend\modules\freelancer\assets\P2FreelancerAsset::register($this);
 *
 * use frontend\modules\freelancer\assets\P2FreelancerAsset;
 * P2FreelancerAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\freelancer\assets\P2FreelancerAsset',
 */

namespace frontend\modules\freelancer\assets;

class P2FreelancerAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@static/freelancer';

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
	];
}
