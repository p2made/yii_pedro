<?php
/**
 * GrayscaleAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\grayscale\GrayscaleAsset
 *
 * Load this asset with...
 * frontend\modules\grayscale\GrayscaleAsset::register($this);
 *
 * use frontend\modules\grayscale\GrayscaleAsset;
 * GrayscaleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\grayscale\GrayscaleAsset',
 */

namespace frontend\modules\grayscale;

class GrayscaleAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@frontend/modules/grayscale/lib';

	public $css = [
		'css/grayscale.min.css',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/grayscale.min.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'common\assets\P2MadeMetaAsset',
		'common\assets\P2FontAwesomeAsset',
	];
}
