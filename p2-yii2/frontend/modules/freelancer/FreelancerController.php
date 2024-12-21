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

		// Replace BootstrapAsset's CSS with your custom CSS
		Yii::$app->assetManager->bundles['yii\bootstrap5\BootstrapAsset'] = [
			'sourcePath' => '@frontend/modules/freelancer/lib',
			'css' => [
				'css/freelancer.min.css',
			],
		];

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

		$this->view->params['canonicalUrl'] = rtrim(Yii::$app->homeUrl, '/') . '/';
		$this->view->params['title'] = Yii::$app->name;
		$this->view->params['themeName'] = $themeName;
		$this->view->params['keywords'] = Yii::$app->params['keywords'];
		$this->view->params['description'] = Yii::$app->params['description'];
		$this->view->params['author'] = Yii::$app->params['author'];
		$this->view->params['updated'] = Yii::$app->params['updated'];

		// Register the assets and get the base URLs
		$metaAsset = P2MadeMetaAsset::register($this->view);
		$this->view->params['metaAssetUrl'] = $metaAsset->baseUrl;
		$pageAsset = FreelancerAsset::register($this->view);
		$this->view->params['pageAssetUrl'] = $pageAsset->baseUrl;

		// Footer content as variables
		$this->view->params['footerItems']['location'] = [
			'title' => 'Location',
			'address' => '2215 John Daniel Drive<br>Clark, MO 65243',
		];
		$this->view->params['footerItems']['about'] = [
			'title' => 'About Freelancer',
			'text' => 'Freelance is a free to use, MIT licensed Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.',
		];
		$this->view->params['footerItems']['socialLinks'] = [
			['icon' => 'bi-facebook', 'url' => '#', 'label' => 'Facebook'],
			['icon' => 'bi-twitter', 'url' => '#', 'label' => 'Twitter'],
			['icon' => 'bi-linkedin', 'url' => '#', 'label' => 'LinkedIn'],
			['icon' => 'bi-dribbble', 'url' => '#', 'label' => 'Dribbble'],
			['icon' => 'bi-instagram', 'url' => '#', 'label' => 'Instagram'],
			['icon' => 'bi-threads', 'url' => '#', 'label' => 'Threads'],
			['icon' => 'bi-reddit', 'url' => '#', 'label' => 'Reddit'],
		];

		/** view params
$canonicalUrl = $this->params['canonicalUrl'];
$title = $this->params['title'];
$themeName = $this->params['themeName'];
$keywords = $this->params['keywords'];
$description = $this->params['description'];
$author = $this->params['author'];
$updated = $this->params['updated'];
$metaAssetUrl = $this->params['metaAssetUrl'];
$pageAssetUrl = $this->params['pageAssetUrl'];
$footerItems = $this->params['footerItems'];

$location = $this->params['footerItems']['location'];
$about = $this->params['footerItems']['about'];
$socialLinks = $this->params['footerItems']['socialLinks'];
		 */

		// Render the specific view for freelancer
		return $this->render('@frontend/modules/freelancer/views/layouts/main');
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
