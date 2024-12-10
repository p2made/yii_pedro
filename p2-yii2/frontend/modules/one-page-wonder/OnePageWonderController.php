<?php
/**
 * OnePageWonderController.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

namespace frontend\modules\one-page-wonder;

use Yii;
use yii\base\Theme;
use yii\helpers\Html;
use common\assets\P2MadeMetaAsset;
use frontend\modules\one-page-wonder\OnePageWonderAsset;

/**
 * Default controller for the `one-page-wonder` module
 */
class OnePageWonderController extends \yii\web\Controller
{
	public function init()
	{
		parent::init();

		// Set a more specific path map for the theme
		Yii::$app->view->theme = new Theme([
			'pathMap' => [
				//'@app/views/layouts' => '@frontend/modules/one-page-wonder/views/layouts',
				'@app/views/layouts' => '@app/modules/one-page-wonder/views/layouts',
			],
		]);

		// Specify the layout explicitly for this controller
		//$this->layout = '@frontend/modules/one-page-wonder/views/layouts/main';
		$this->layout = '@app/modules/one-page-wonder/views/layouts/main';
	}

	/**
	 * Renders the view for the module
	 * @return string
	 */
	public function actionView()
	{
		$themeName = 'One Page Wonder';

		// Register the assets and get the base URLs
		$metaAsset = P2MadeMetaAsset::register($this->view);
		$pageAsset = OnePageWonderAsset::register($this->view);

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

		// Render the specific view for one-page-wonder
		return $this->render('@frontend/modules/one-page-wonder/views/site/index', [
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
