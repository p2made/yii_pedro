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
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
	<?= $this->render('@frontend/modules/freelancer/views/site/head.php') ?>
</head>
<body id="page-top">
<?php $this->beginBody() ?>
	<?= $this->render('@frontend/modules/freelancer/views/site/navigation.php') ?>
	<?= $this->render('@frontend/modules/freelancer/views/site/masthead.php') ?>
	<?= $this->render('@frontend/modules/freelancer/views/site/portfolio.php') ?>
	<?= $this->render('@frontend/modules/freelancer/views/site/about.php') ?>
	<?= $this->render('@frontend/modules/freelancer/views/site/contact.php') ?>
	<?= $this->render('@frontend/modules/freelancer/views/site/footer.php', [
		'location' => $footerItems['location'],
		'about' => $footerItems['about'],
		'socialLinks' => $footerItems['socialLinks'],
	]) ?>

	<?= $this->render('@frontend/modules/freelancer/views/site/copyright.php') ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php
		/**
		'canonicalUrl' => $canonicalUrl,
		'title' => $title,
		'themeName' => $themeName,
		'keywords' => $keywords,
		'description' => $description,
		'author' => $author,
		'updated' => $updated,
		'metaAssetUrl' => $metaAssetUrl,
		'pageAssetUrl' => $pageAssetUrl,
		'footerItems' => $footerItems,
		 */
