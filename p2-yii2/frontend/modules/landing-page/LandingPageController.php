<?php
/**
 * FreelancerController.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

namespace frontend\modules\freelancer;

use Yii;
use yii\base\Theme;
use yii\helpers\Html;
use common\assets\P2MadeMetaAsset;
use frontend\modules\freelancer\FreelancerAsset;

/**
 * Default controller for the `freelancer` module
 */
class FreelancerController extends \yii\web\Controller
{
	public function init()
	{
		parent::init();

		// Set a more specific path map for the theme
		Yii::$app->view->theme = new Theme([
			'pathMap' => [
				//'@app/views/layouts' => '@frontend/modules/freelancer/views/layouts',
				'@app/views/layouts' => '@app/modules/freelancer/views/layouts',
			],
		]);

		// Specify the layout explicitly for this controller
		//$this->layout = '@frontend/modules/freelancer/views/layouts/main';
		$this->layout = '@app/modules/freelancer/views/layouts/main';
	}

	/**
	 * Renders the view for the module
	 * @return string
	 */
	public function actionView()
	{
		$themeName = 'Freelancer';

		// Register the assets and get the base URLs
		$metaAsset = P2MadeMetaAsset::register($this->view);
		$pageAsset = FreelancerAsset::register($this->view);

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

		// Render the specific view for freelancer
		return $this->render('@frontend/modules/freelancer/views/site/index', [
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
\frontend\modules\freelancer\
\frontend\modules\freelancer\FreelancerAsset.php
\frontend\modules\freelancer\FreelancerController.php
\frontend\modules\freelancer\FreelancerModule.php

/frontend/modules/freelancer/
/frontend/modules/freelancer/FreelancerAsset.php
/frontend/modules/freelancer/FreelancerController.php
/frontend/modules/freelancer/FreelancerModule.php
/frontend/modules/freelancer/lib/
/frontend/modules/freelancer/lib/css/
/frontend/modules/freelancer/lib/img/
/frontend/modules/freelancer/lib/js/
/frontend/modules/freelancer/views/
/frontend/modules/freelancer/views/index.php
/frontend/modules/freelancer/views/layouts/
/frontend/modules/freelancer/views/layouts/main.php
/frontend/modules/freelancer/views/site/
/frontend/modules/freelancer/views/site/about.php
/frontend/modules/freelancer/views/site/contact.php
/frontend/modules/freelancer/views/site/error.php
/frontend/modules/freelancer/views/site/index.php
/frontend/modules/freelancer/views/site/login.php
 */

/*
 */
