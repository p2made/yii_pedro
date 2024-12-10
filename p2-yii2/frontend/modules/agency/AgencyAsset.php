<?php
/**
 * AgencyAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\agency\AgencyAsset
 *
 * Load this asset with...
 * frontend\modules\agency\AgencyAsset::register($this);
 *
 * use frontend\modules\agency\AgencyAsset;
 * AgencyAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\agency\AgencyAsset',
 */

namespace frontend\modules\agency;

class AgencyAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@frontend/modules/agency/lib';

	public $css = [
		'css/agency.min.css',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/agency.min.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'common\assets\P2MadeMetaAsset',
		'common\assets\P2FontAwesomeAsset',
		//'frontend\modules\agency\FreelancerFontsAsset',
	];
}
