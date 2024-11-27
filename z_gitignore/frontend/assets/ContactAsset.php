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
class ContactAsset extends AssetBundle
{
	public $sourcePath = null;
	public $css = [];
	public $js = [
		'//cdn.p2made.dev/frontend/js/jqBootstrapValidation.js',
		'//cdn.p2made.dev/frontend/js/contact_me.js',
	];
	public $depends = [
		'common\assets\CoreAsset',
	];
}
