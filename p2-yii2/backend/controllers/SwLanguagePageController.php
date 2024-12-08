<?php

namespace backend\controllers;

use common\models\SwLanguagePage;
use common\models\SwLanguagePageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SwLanguagePageController implements the CRUD actions for SwLanguagePage model.
 */
class SwLanguagePageController extends Controller
{
	/**
	 * @inheritDoc
	 */
	public function behaviors()
	{
		return array_merge(
			parent::behaviors(),
			[
				'verbs' => [
					'class' => VerbFilter::className(),
					'actions' => [
						'delete' => ['POST'],
					],
				],
			]
		);
	}

	/**
	 * Lists all SwLanguagePage models.
	 *
	 * @return string
	 */
	public function actionIndex()
	{
		$searchModel = new SwLanguagePageSearch();
		$dataProvider = $searchModel->search($this->request->queryParams);

		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single SwLanguagePage model.
	 * @param int $pk Page PK
	 * @return string
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionView($pk)
	{
		return $this->render('view', [
			'model' => $this->findModel($pk),
		]);
	}

	/**
	 * Creates a new SwLanguagePage model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return string|\yii\web\Response
	 */
	public function actionCreate()
	{
		$model = new SwLanguagePage();

		if ($this->request->isPost) {
			if ($model->load($this->request->post()) && $model->save()) {
				return $this->redirect(['view', 'pk' => $model->pk]);
			}
		} else {
			$model->loadDefaultValues();
		}

		return $this->render('create', [
			'model' => $model,
		]);
	}

	/**
	 * Updates an existing SwLanguagePage model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param int $pk Page PK
	 * @return string|\yii\web\Response
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionUpdate($pk)
	{
		$model = $this->findModel($pk);

		if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
			return $this->redirect(['view', 'pk' => $model->pk]);
		}

		return $this->render('update', [
			'model' => $model,
		]);
	}

	/**
	 * Deletes an existing SwLanguagePage model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param int $pk Page PK
	 * @return \yii\web\Response
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionDelete($pk)
	{
		$this->findModel($pk)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the SwLanguagePage model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param int $pk Page PK
	 * @return SwLanguagePage the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($pk)
	{
		if (($model = SwLanguagePage::findOne(['pk' => $pk])) !== null) {
			return $model;
		}

		throw new NotFoundHttpException('The requested page does not exist.');
	}
}
