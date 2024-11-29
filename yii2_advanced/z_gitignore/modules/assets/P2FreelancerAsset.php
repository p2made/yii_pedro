<?php
/**
 * @themes/freelancer/assets/P2FreelancerAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://steppewest.com/
 * @license MIT
 */

/**
 * @class \themes\freelancer\assets\P2FreelancerAsset
 *
 * Load this asset with...
 * themes\freelancer\assets\P2FreelancerAsset::register($this);
 *
 * use themes\freelancer\assets\P2FreelancerAsset;
 * P2FreelancerAsset::register($this);
 *
 * or specify as a dependency with...
 *     'themes\freelancer\assets\P2FreelancerAsset',
 */

namespace themes\freelancer\assets;

class P2FreelancerAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@themes/freelancer/assets/lib';

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
		//'common\assets\SwMetaAsset',
	];
}
