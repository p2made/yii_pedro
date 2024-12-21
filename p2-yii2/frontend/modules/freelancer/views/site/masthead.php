<?php
/**
 * @frontend/modules/freelancer/views/site/masthead.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

use yii\bootstrap5\Html;
use yii\helpers\Url;

$avatar = $this->params['pageAssetUrl'] . '/img/pedro_eagle.jpeg';
?>
<!-- Masthead -->
<header class="masthead bg-primary text-white text-center">
	<div class="container d-flex align-items-center flex-column">
		<!-- Masthead Avatar Image -->
		<?= Html::img($avatar, [
			'class' => 'img-fluid rounded-circle masthead-avatar mb-5',
			'alt' => 'Pedro Eagle',
		]) ?>
		<!-- Masthead Heading -->
		<h1 class="masthead-heading mb-0">
			<?= Html::encode(Yii::$app->params['author']) ?>
		</h1>
		<!-- Icon Divider -->
		<div class="divider-custom divider-light">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><?= Html::tag('i', '', ['class' => 'bi bi-stars']) ?></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- Masthead Subheading -->
		<p class="masthead-subheading font-weight-light mb-0">
			Global <?= Html::a('Yii', 'https://www.yiiframework.com/', [
				'title' => 'Yii2',
				'target' => '_blank',
				'rel' => 'noopener noreferrer',
				'class' => 'text-white',
			]) ?> Web Developer
		</p>
	</div>
</header>
