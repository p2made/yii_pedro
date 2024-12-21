<?php
/**
 * @frontend/modules/freelancer/views/site/footer.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @var \yii\web\View $this
 */

use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Footer -->
<footer class="footer text-center">
	<div class="container">
		<div class="row">
			<!-- Footer Location -->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="mb-4"><?= Html::encode($location['title']) ?></h4>
				<p class="lead mb-0">
					<?= $location['address'] ?>
				</p>
			</div>
			<!-- Footer Social Icons -->
			<div class="col-lg-4 mb-5 mb-lg-0">
				<h4 class="mb-4">Around the Web</h4>
				<?php foreach ($socialLinks as $social): ?>
					<?= Html::a(
						Html::tag('i', '', ['class' => $social['icon']]),
						$social['url'],
						[
							'class' => 'btn btn-outline-light btn-social mx-1',
							'title' => $social['label'],
							'aria-label' => $social['label'],
						]
					) ?>
				<?php endforeach; ?>
			</div>
			<!-- Footer About Text -->
			<div class="col-lg-4">
				<h4 class="mb-4"><?= Html::encode($about['title']) ?></h4>
				<p class="lead mb-0">
					<?= $about['text'] ?>
				</p>
			</div>
		</div>
	</div>
</footer>
