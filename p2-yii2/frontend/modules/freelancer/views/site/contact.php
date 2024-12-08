<?php
/**
 * @frontend/modules/freelancer/views/site/contact.php
 *
 * @author Pedro Plowman
 * @copyright Copyright (c) 2024 Pedro Plowman
 * @link https://pedro.id.au/
 * @license MIT
 */

/**
 * @frontend/modules/freelancer/views/site/contact.php
 *
 * @var yii\web\View $this
 * @var yii\bootstrap5\ActiveForm $form
 * @var app\models\ContactForm $model
 *
 * Here $model should be an instance of app\models\ContactForm or similar.
 * Ensure the model attributes (name, email, phone, message) and validation rules are defined in that model.
 */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\base\DynamicModel;

// Create a dummy model using DynamicModel for now
$model = new DynamicModel(['name', 'email', 'phone', 'message']);
$model->addRule(['name', 'email', 'phone', 'message'], 'safe');
?>
<!-- Contact Section -->
<section class="page-section" id="contact">
	<div class="container">
		<!-- Contact Section Heading-->
		<?= Html::tag('h2', 'Contact Me', [
			'class' => 'page-section-heading text-center text-uppercase text-secondary mb-0'
		]) ?>

		<!-- Icon Divider-->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="bi bi-star-fill"></i></div>
			<div class="divider-custom-line"></div>
		</div>

		<!-- Contact Section Form-->
		<div class="row justify-content-center">
			<div class="col-lg-8 col-xl-7">
				<?php $form = ActiveForm::begin([
					'id' => 'contact-form',
					'options' => ['class' => ''],
				]); ?>

				<!-- Name input-->
				<?= $form->field($model, 'name', [
					'options' => ['class' => 'form-floating mb-3'],
					'errorOptions' => ['class' => 'invalid-feedback'],
				])->textInput([
					'placeholder' => 'Enter your name...',
					'class' => 'form-control',
				])->label('Full name', ['for' => 'contactform-name']) ?>

				<!-- Email address input-->
				<?= $form->field($model, 'email', [
					'options' => ['class' => 'form-floating mb-3'],
					'errorOptions' => ['class' => 'invalid-feedback'],
				])->input('email', [
					'placeholder' => 'name@example.com',
					'class' => 'form-control',
				])->label('Email address', ['for' => 'contactform-email']) ?>

				<!-- Phone number input-->
				<?= $form->field($model, 'phone', [
					'options' => ['class' => 'form-floating mb-3'],
					'errorOptions' => ['class' => 'invalid-feedback'],
				])->textInput([
					'placeholder' => '+61 412 345 678 / +61 1 2345 6789',
					'class' => 'form-control',
				])->label('Phone number', ['for' => 'contactform-phone']) ?>

				<!-- Message input-->
				<?= $form->field($model, 'message', [
					'options' => ['class' => 'form-floating mb-3'],
					'errorOptions' => ['class' => 'invalid-feedback'],
				])->textarea([
					'placeholder' => 'Enter your message here...',
					'class' => 'form-control',
					'style' => 'height: 10rem;',
				])->label('Message', ['for' => 'contactform-message']) ?>

				<!-- Submit Button (disabled for now) -->
				<div class="text-center mt-4">
					<?= Html::submitButton('Send', [
						'class' => 'btn btn-primary btn-xl disabled',
						'disabled' => true,
						'id' => 'submitButton',
					]) ?>
				</div>

				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
</section>
