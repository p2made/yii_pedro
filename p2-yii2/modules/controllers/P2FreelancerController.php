<?php

namespace app\modules\controllers;

use yii\web\Controller;

/**
 * Default controller for the `freelancer` module
 */
class P2FreelancerController extends Controller
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
