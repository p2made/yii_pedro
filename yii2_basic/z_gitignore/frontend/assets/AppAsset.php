<?php
/**
 * AppAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * frontend\assets\AppAsset::register($this);
 *
 * or specify as a dependency with...
 *     'frontend\assets\AppAsset',
 */

namespace frontend\assets;

class AppAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@frontend/assets/lib',
			'css' => [
				'css/stylish-portfolio.min.css',
			],
			'js' => [
				'js/stylish-portfolio.min.js',
			],
		],

		'depends' => [
			'p2made\SB\assets\StylishPortfolioFontsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
