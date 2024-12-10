<?php
/**
 * OnePageWonderFontsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\freelancer\OnePageWonderFontsAsset
 *
 * Load this asset with...
 * frontend\modules\freelancer\OnePageWonderFontsAsset::register($this);
 *
 * use frontend\modules\freelancer\OnePageWonderFontsAsset;
 * OnePageWonderFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\freelancer\OnePageWonderFontsAsset',
 */

namespace frontend\modules\freelancer;

class OnePageWonderFontsAsset extends \yii\web\AssetBundle
{
	public $sourcePath = null;
	public $baseUrl = '//fonts.googleapis.com';

	public $css = [
		'css?family=Catamaran:100,200,300,400,500,600,700,800,900',
		'css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'common\assets\P2MadeMetaAsset',
	];
}
