<?php
/**
 * ResumeFontsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\freelancer\ResumeFontsAsset
 *
 * Load this asset with...
 * frontend\modules\freelancer\ResumeFontsAsset::register($this);
 *
 * use frontend\modules\freelancer\ResumeFontsAsset;
 * ResumeFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\freelancer\ResumeFontsAsset',
 */

namespace frontend\modules\freelancer;

class ResumeFontsAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;
	public $baseUrl = '//fonts.googleapis.com';

	public $css = [
		'css?family=Saira+Extra+Condensed:500,700',
		'css?family=Muli:400,400i,800,800i',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'common\assets\P2MadeMetaAsset',
	];
}
