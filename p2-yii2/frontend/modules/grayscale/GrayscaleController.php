<?php
/**
 * GrayscaleController.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

namespace frontend\modules\grayscale;

use Yii;
use yii\base\Theme;
use yii\helpers\Html;
use common\assets\P2MadeMetaAsset;
use frontend\modules\grayscale\GrayscaleAsset;

/**
 * Default controller for the `grayscale` module
 */
class GrayscaleController extends \yii\web\Controller
{
	public function init()
	{
		parent::init();

		// Set a more specific path map for the theme
		Yii::$app->view->theme = new Theme([
			'pathMap' => [
				//'@app/views/layouts' => '@frontend/modules/grayscale/views/layouts',
				'@app/views/layouts' => '@app/modules/grayscale/views/layouts',
			],
		]);

		// Specify the layout explicitly for this controller
		//$this->layout = '@frontend/modules/grayscale/views/layouts/main';
		$this->layout = '@app/modules/grayscale/views/layouts/main';
	}

	/**
	 * Renders the view for the module
	 * @return string
	 */
	public function actionView()
	{
		$themeName = 'Grayscale';

		// Register the assets and get the base URLs
		$metaAsset = P2MadeMetaAsset::register($this->view);
		$pageAsset = GrayscaleAsset::register($this->view);

		$this->view->params['canonicalUrl'] = rtrim(Yii::$app->homeUrl, '/') . '/';
		$this->view->params['title'] = Yii::$app->name . ' - ' . $themeName;
		$this->view->params['keywords'] = Yii::$app->params['keywords'];
		$this->view->params['description'] = Yii::$app->params['description'];
		$this->view->params['author'] = Yii::$app->params['author'];
		$this->view->params['updated'] = Yii::$app->params['updated'];
		$this->view->params['metaAssetUrl'] = $metaAsset->baseUrl;
		$this->view->params['pageAssetUrl'] = $pageAsset->baseUrl;

		/** view params
$canonicalUrl = $this->params['canonicalUrl'];
$title = $this->params['title'];
$keywords = $this->params['keywords'];
$description = $this->params['description'];
$author = $this->params['author'];
$updated = $this->params['updated'];
$metaAssetUrl = $this->params['metaAssetUrl'];
$pageAssetUrl = $this->params['pageAssetUrl'];
		 */

		// Render the specific view for grayscale
		return $this->render('@frontend/modules/grayscale/views/site/index', [
			'canonicalUrl' => rtrim(Yii::$app->homeUrl, '/') . '/',
			'title' => Yii::$app->name,
			'keywords' => Yii::$app->params['keywords'],
			'description' => Yii::$app->params['description'],
			'author' => Yii::$app->params['author'],
			'updated' => Yii::$app->params['updated'],
			'copyright' => Yii::$app->params['copyright'],
			'metaAssetUrl' => $metaAsset->baseUrl,
			'pageAssetUrl' => $pageAsset->baseUrl,
		]);
	}
}

/**
\frontend\modules\grayscale\
\frontend\modules\grayscale\FreelancerAsset.php
\frontend\modules\grayscale\GrayscaleController.php
\frontend\modules\grayscale\FreelancerModule.php

/frontend/modules/grayscale/
/frontend/modules/grayscale/FreelancerAsset.php
/frontend/modules/grayscale/GrayscaleController.php
/frontend/modules/grayscale/FreelancerModule.php
/frontend/modules/grayscale/lib/
/frontend/modules/grayscale/lib/css/
/frontend/modules/grayscale/lib/img/
/frontend/modules/grayscale/lib/js/
/frontend/modules/grayscale/views/
/frontend/modules/grayscale/views/index.php
/frontend/modules/grayscale/views/layouts/
/frontend/modules/grayscale/views/layouts/main.php
/frontend/modules/grayscale/views/site/
/frontend/modules/grayscale/views/site/about.php
/frontend/modules/grayscale/views/site/contact.php
/frontend/modules/grayscale/views/site/error.php
/frontend/modules/grayscale/views/site/index.php
/frontend/modules/grayscale/views/site/login.php
 */

/*
 */
