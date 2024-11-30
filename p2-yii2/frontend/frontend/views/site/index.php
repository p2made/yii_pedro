<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = 'Home';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@frontend/assets/lib'
);
?>

<?= $this->render('_header.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_myfestivals-app.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_sewing.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_programming.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_camp-kitchen.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_contact.php') ?>
<?= $this->render('_footer.php') ?>
