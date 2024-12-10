<?php
/**
 * OnePageWonderAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\one-page-wonder\OnePageWonderAsset
 *
 * Load this asset with...
 * frontend\modules\one-page-wonder\OnePageWonderAsset::register($this);
 *
 * use frontend\modules\one-page-wonder\OnePageWonderAsset;
 * OnePageWonderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\one-page-wonder\OnePageWonderAsset',
 */

namespace frontend\modules\one-page-wonder;

class OnePageWonderAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@frontend/modules/one-page-wonder/lib';

	public $css = [
		'css/one-page-wonder.min.css',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	/**
	public $js = [
		'js/one-page-wonder.min.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];
	 */

	public $depends = [
		'common\assets\P2MadeMetaAsset',
		'common\assets\P2FontAwesomeAsset',
	];
}
