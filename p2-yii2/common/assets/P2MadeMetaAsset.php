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
 * @class \common\assets\P2MadeMetaAsset
 *
 * Load this asset with...
 * common\assets\P2MadeMetaAsset::register($this);
 *
 * use common\assets\P2MadeMetaAsset;
 * P2MadeMetaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'common\assets\P2MadeMetaAsset',
 */

namespace common\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class P2MadeMetaAsset extends AssetBundle
{
	public $sourcePath = '@app/static/p2-meta';

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap5\BootstrapAsset',
		'common\assets\P2BootstrapIconsAsset',
	];
}
