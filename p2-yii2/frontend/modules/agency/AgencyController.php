<?php
/**
 * AgencyController.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

namespace frontend\modules\agency;

use Yii;
use yii\base\Theme;
use yii\helpers\Html;
use common\assets\P2MadeMetaAsset;
use frontend\modules\agency\AgencyAsset;

/**
 * Default controller for the `agency` module
 */
class AgencyController extends \yii\web\Controller
{
	public function init()
	{
		parent::init();

		// Set a more specific path map for the theme
		Yii::$app->view->theme = new Theme([
			'pathMap' => [
				//'@app/views/layouts' => '@frontend/modules/agency/views/layouts',
				'@app/views/layouts' => '@app/modules/agency/views/layouts',
			],
		]);

		// Specify the layout explicitly for this controller
		//$this->layout = '@frontend/modules/agency/views/layouts/main';
		$this->layout = '@app/modules/agency/views/layouts/main';
	}

	/**
	 * Renders the view for the module
	 * @return string
	 */
	public function actionView()
	{
		$themeName = 'Agency';

		// Register the assets and get the base URLs
		$metaAsset = P2MadeMetaAsset::register($this->view);
		$pageAsset = AgencyAsset::register($this->view);

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

		// Render the specific view for agency
		return $this->render('@frontend/modules/agency/views/site/index');
	}
}
