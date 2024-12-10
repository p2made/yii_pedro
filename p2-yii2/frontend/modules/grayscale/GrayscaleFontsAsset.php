<?php
/**
 * GrayscaleFontsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\freelancer\GrayscaleFontsAsset
 *
 * Load this asset with...
 * frontend\modules\freelancer\GrayscaleFontsAsset::register($this);
 *
 * use frontend\modules\freelancer\GrayscaleFontsAsset;
 * GrayscaleFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\freelancer\GrayscaleFontsAsset',
 */

namespace frontend\modules\freelancer;

class GrayscaleFontsAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;
	public $baseUrl = '//fonts.googleapis.com';

	public $css = [
		'css?family=Varela+Round',
		'css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'common\assets\P2MadeMetaAsset',
	];
}
