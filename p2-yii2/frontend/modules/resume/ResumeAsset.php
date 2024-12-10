<?php
/**
 * ResumeAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @class \frontend\modules\resume\ResumeAsset
 *
 * Load this asset with...
 * frontend\modules\resume\ResumeAsset::register($this);
 *
 * use frontend\modules\resume\ResumeAsset;
 * ResumeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\modules\resume\ResumeAsset',
 */

namespace frontend\modules\resume;

class ResumeAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@frontend/modules/resume/lib';

	public $css = [
		'css/resume.min.css',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/resume.min.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'common\assets\P2MadeMetaAsset',
		'common\assets\P2FontAwesomeAsset',
	];
}
