<?php
/**
 * AgencyFontsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\freelancer\AgencyFontsAsset
 *
 * Load this asset with...
 * frontend\modules\freelancer\AgencyFontsAsset::register($this);
 *
 * use frontend\modules\freelancer\AgencyFontsAsset;
 * AgencyFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\freelancer\AgencyFontsAsset',
 */

namespace frontend\modules\freelancer;

class AgencyFontsAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;
	public $baseUrl = '//fonts.googleapis.com';

	public $css = [
		'css?family=Montserrat:400,700',
		'css?family=Roboto+Slab:400,100,300,700',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'common\assets\P2MadeMetaAsset',
	];
}
