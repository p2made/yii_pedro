<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FontAsset extends AssetBundle
{
	public $sourcePath = null;
	public $css = [
		'//fonts.googleapis.com/css?family=Montserrat:400,700',
		'//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic',
	];
	public $js = [];
	public $depends = [
		'common\assets\CoreAsset',
		'frontend\assets\AppAsset',
	];
}
