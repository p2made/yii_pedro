<?php
/**
 * LandingPageController.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

namespace frontend\modules\landing-page;

use Yii;
use yii\base\Theme;
use yii\helpers\Html;
use common\assets\P2MadeMetaAsset;
use frontend\modules\landing-page\LandingPageAsset;

/**
 * Default controller for the `landing-page` module
 */
class LandingPageController extends \yii\web\Controller
{
	public function init()
	{
		parent::init();

		// Set a more specific path map for the theme
		Yii::$app->view->theme = new Theme([
			'pathMap' => [
				//'@app/views/layouts' => '@frontend/modules/landing-page/views/layouts',
				'@app/views/layouts' => '@app/modules/landing-page/views/layouts',
			],
		]);

		// Specify the layout explicitly for this controller
		//$this->layout = '@frontend/modules/landing-page/views/layouts/main';
		$this->layout = '@app/modules/landing-page/views/layouts/main';
	}

	/**
	 * Renders the view for the module
	 * @return string
	 */
	public function actionView()
	{
		$themeName = 'Landing Page';

		// Register the assets and get the base URLs
		$metaAsset = P2MadeMetaAsset::register($this->view);
		$pageAsset = LandingPageAsset::register($this->view);

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

		// Render the specific view for landing-page
		return $this->render('@frontend/modules/landing-page/views/site/index', [
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
\frontend\modules\landing-page\
\frontend\modules\landing-page\FreelancerAsset.php
\frontend\modules\landing-page\LandingPageController.php
\frontend\modules\landing-page\FreelancerModule.php

/frontend/modules/landing-page/
/frontend/modules/landing-page/FreelancerAsset.php
/frontend/modules/landing-page/LandingPageController.php
/frontend/modules/landing-page/FreelancerModule.php
/frontend/modules/landing-page/lib/
/frontend/modules/landing-page/lib/css/
/frontend/modules/landing-page/lib/img/
/frontend/modules/landing-page/lib/js/
/frontend/modules/landing-page/views/
/frontend/modules/landing-page/views/index.php
/frontend/modules/landing-page/views/layouts/
/frontend/modules/landing-page/views/layouts/main.php
/frontend/modules/landing-page/views/site/
/frontend/modules/landing-page/views/site/about.php
/frontend/modules/landing-page/views/site/contact.php
/frontend/modules/landing-page/views/site/error.php
/frontend/modules/landing-page/views/site/index.php
/frontend/modules/landing-page/views/site/login.php
 */

/*
 */
