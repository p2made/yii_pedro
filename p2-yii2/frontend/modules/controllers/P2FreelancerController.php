<?php
/**
 * @frontend/modules/controllers/P2FreelancerController.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

namespace frontend\modules\controllers;

use yii\web\Controller;

/**
 * Default controller for the `freelancer` module
 */
class DefaultController extends Controller
{
	/**
	 * Renders the index view for the module
	 * @return string
	 */
	public function actionIndex()
	{
		return $this->render('index');
	}
}
