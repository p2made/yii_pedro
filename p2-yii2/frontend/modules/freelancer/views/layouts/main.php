<?php
/**
 * @frontend/modules/freelancer/layouts/main.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/** @var yii\web\View $this */
/** @var string $content */

use yii\bootstrap5\Html;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
	<?= $this->render('@frontend/modules/freelancer/views/layouts/head.php') ?>
</head>
<body id="page-top">
<?php $this->beginBody() ?>
	<?= $this->render('@frontend/modules/freelancer/views/layouts/navigation.php') ?>
	<?= $this->render('@frontend/modules/freelancer/views/layouts/masthead.php') ?>
	<?= $this->render('@frontend/modules/freelancer/views/layouts/portfolio.php') ?>
	<?= $this->render('@frontend/modules/freelancer/views/site/about.php') ?>
	<?= $this->render('@frontend/modules/freelancer/views/site/contact.php') ?>
	<?= $this->render('@frontend/modules/freelancer/views/layouts/footer.php') ?>

	<?= $this->render('@frontend/modules/freelancer/views/layouts/copyright.php') ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
