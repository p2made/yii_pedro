<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = 'p2made';
?>
<div class="site-error">
	<!-- Header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<img class="img-responsive" src="//cdn.p2made.dev/common/img/p2m_header_t.png" alt="p2made" width="900" height="300">
					<div class="alert alert-danger">
						<h1><?= nl2br(Html::encode($code)) ?>, <?= nl2br(Html::encode($message)) ?></h1>
					</div>
					<div class="intro-text">
						<hr class="star-light">
						<p>The above error occurred while the Web server was processing your request.</p>
						<p>Please contact us if you think this is a server error. Thank you.</p>
						<span class="skills">Try <a href="//p2made.dev/" title="">here</a> instead.</span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- About Section -->
	<section class="success" id="about">
	</section>
</div>
