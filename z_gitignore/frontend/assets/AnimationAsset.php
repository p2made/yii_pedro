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
class AnimationAsset extends AssetBundle
{
	public $sourcePath = null;
	public $css = [];
	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
		'//cdn.p2made.dev/frontend/js/classie.js',
		'//cdn.p2made.dev/frontend/js/cbpAnimatedHeader.js',
	];
	public $depends = [
		'common\assets\CoreAsset',
	];
}
