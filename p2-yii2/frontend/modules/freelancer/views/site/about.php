<?php
/**
 * @frontend/modules/freelancer/views/site/about.php
 *
 * @author Pedro
 * @copyright Copyright (c) 2024 Pedro
 * @link https://pedro.id.au/
 * @license MIT
 */

/** @var yii\web\View $this */

use yii\helpers\Html;

$p1 = Html::encode(Yii::$app->params['about'][0] ?? 'No about text found.');
$p2 = Html::encode(Yii::$app->params['about'][1] ?? 'No about text found.');
?>

<!-- About Section -->
<section class="page-section bg-primary text-white mb-0" id="about">
	<div class="container">
		<!-- About Section Heading -->
		<?= Html::tag('h2', 'About', [
			'class' => 'page-section-heading text-center text-white'
		]) ?>

		<!-- Icon Divider -->
		<div class="divider-custom divider-light">
			<?= Html::tag('div', '', ['class' => 'divider-custom-line']) ?>
			<div class="divider-custom-icon">
				<?= Html::tag('i', '', ['class' => 'bi bi-star-fill']) ?>
			</div>
			<?= Html::tag('div', '', ['class' => 'divider-custom-line']) ?>
		</div>

		<!-- About Section Content -->
		<div class="row">
			<div class="col-lg-4 ms-auto">
				<?= Html::tag('p', $p1, ['class' => 'lead']) ?>
			</div>
			<div class="col-lg-4 me-auto">
				<?= Html::tag('p', $p2, ['class' => 'lead']) ?>
			</div>
		</div>

		<!-- Future Theme Selection Placeholder -->
		<div class="text-center mt-4">
			<?= Html::a('Theme Selection (Coming Soon)', '#', [
				'class' => 'btn btn-xl btn-outline-light disabled',
				'title' => 'Future feature placeholder'
			]) ?>
		</div>
	</div>
</section>
