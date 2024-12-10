<?php
/**
 * ResumeController.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

namespace frontend\modules\resume;

use Yii;
use yii\base\Theme;
use yii\helpers\Html;
use common\assets\P2MadeMetaAsset;
use frontend\modules\resume\ResumeAsset;

/**
 * Default controller for the `resume` module
 */
class ResumeController extends \yii\web\Controller
{
	public function init()
	{
		parent::init();

		// Set a more specific path map for the theme
		Yii::$app->view->theme = new Theme([
			'pathMap' => [
				//'@app/views/layouts' => '@frontend/modules/resume/views/layouts',
				'@app/views/layouts' => '@app/modules/resume/views/layouts',
			],
		]);

		// Specify the layout explicitly for this controller
		//$this->layout = '@frontend/modules/resume/views/layouts/main';
		$this->layout = '@app/modules/resume/views/layouts/main';
	}

	/**
	 * Renders the view for the module
	 * @return string
	 */
	public function actionView()
	{
		$themeName = 'Resume';

		// Register the assets and get the base URLs
		$metaAsset = P2MadeMetaAsset::register($this->view);
		$pageAsset = ResumeAsset::register($this->view);

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

		// Render the specific view for resume
		return $this->render('@frontend/modules/resume/views/site/index', [
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
