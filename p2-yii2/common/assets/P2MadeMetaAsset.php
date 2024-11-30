<?php
/**
 * P2MadeMetaAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Steppe West
 * @link https://steppewest.com/
 * @license MIT
 */

/**
 * @class \app\assets\P2MadeMetaAsset
 *
 * Load this asset with...
 * app\assets\P2MadeMetaAsset::register($this);
 *
 * use app\assets\P2MadeMetaAsset;
 * P2MadeMetaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'app\assets\P2MadeMetaAsset',
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class P2MadeMetaAsset extends AssetBundle
{
	public $sourcePath = '@app/static/p2meta';

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap5\BootstrapAsset',
		'app\assets\P2BootstrapIconsAsset',
	];
}
