<?php
/**
 * @frontend/modules/freelancer/views/layouts/portfolio.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

use yii\helpers\Html;

$pageAssetUrl = $this->params['pageAssetUrl'];
$portfolioImages = [
	'cabin' => $pageAssetUrl . '/img/portfolio/cabin.png',
	'cake' => $pageAssetUrl . '/img/portfolio/cake.png',
	'circus' => $pageAssetUrl . '/img/portfolio/circus.png',
	'game' => $pageAssetUrl . '/img/portfolio/game.png',
	'safe' => $pageAssetUrl . '/img/portfolio/safe.png',
	'submarine' => $pageAssetUrl . '/img/portfolio/submarine.png',
];
?>
<!-- Portfolio Section -->
<section class="page-section portfolio" id="portfolio">
	<div class="container">
		<!-- Portfolio Section Heading-->
		<h2 class="page-section-heading text-center text-secondary mb-0">Portfolio</h2>
		<!-- Icon Divider-->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="bi bi-star-fill bi-large"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		<!-- Portfolio Grid Items-->
		<div class="row justify-content-center">
			<?php foreach ($portfolioImages as $key => $imageSrc): ?>
				<?php
				$capitalizedKey = ucfirst($key); // Capitalize key for alt text and other uses
				$modalId = "portfolioModal" . array_search($key, array_keys($portfolioImages)) + 1;
				?>
				<div class="col-md-6 col-lg-4 mb-5">
					<div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#<?= Html::encode($modalId) ?>">
						<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
							<div class="portfolio-item-caption-content text-center text-white">
								<i class="bi bi-plus-lg bi-large bi-3x"></i>
							</div>
						</div>
						<?= Html::img($imageSrc, [
							'class' => 'img-fluid',
							'alt' => $capitalizedKey,
						]) ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
