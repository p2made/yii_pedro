<!-- P2BEGIN /WWW/yii.p2made.yii/frontend/views/layouts/main.php-->
<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\assets\FontAsset;
use common\assets\ShivAsset;
use common\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
FontAsset::register($this);
ShivAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="//cdn.p2made.dev/common/img/icons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="//cdn.p2made.dev/common/img/icons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="//cdn.p2made.dev/common/img/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="//cdn.p2made.dev/common/img/icons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="//cdn.p2made.dev/common/img/icons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="//cdn.p2made.dev/common/img/icons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="//cdn.p2made.dev/common/img/icons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="//cdn.p2made.dev/common/img/icons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="//cdn.p2made.dev/common/img/icons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="//cdn.p2made.dev/common/img/icons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="//cdn.p2made.dev/common/img/icons/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="//cdn.p2made.dev/common/img/icons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="//cdn.p2made.dev/common/img/icons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="//cdn.p2made.dev/common/img/icons/manifest.json">
	<link rel="shortcut icon" href="//cdn.p2made.dev/common/img/icons/favicon.ico">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="msapplication-TileImage" content="//cdn.p2made.dev/common/img/icons/mstile-144x144.png">
	<meta name="msapplication-config" content="//cdn.p2made.dev/common/img/icons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>

</head>
<body id="page-top" class="index">
	<?php $this->beginBody() ?>
	<div class="wrap">

	<!-- Navigation -->
	<?php
		NavBar::begin([
			'brandLabel' => false,
			//'brandLabel' => 'p2made',
			//'brandLabel' => '<img src="p2made_150x50.png" alt="p2made">',
			'brandUrl' => Yii::$app->homeUrl,
			'options' => [
				'class' => 'navbar navbar-default navbar-fixed-top',
			],
			//'brandOptions' => ['class' => 'brandOptionsClass',],
		]);
		$menuItems = [
			['label' => 'Home', 'url' => Yii::$app->homeUrl],
			['label' => 'Ends', 'items' => [
				['label' => 'Back End', 'url' => Yii::$app->urlManagerBackEnd->baseUrl],
				//['label' => 'Front End', 'url' => Yii::$app->urlManagerFrontEnd->baseUrl],
				['label' => 'CDN', 'url' => Yii::$app->urlManagerCDN->baseUrl],
			]],
			['label' => '', 'url' => '#page-top', 'options' => ['class' => 'hidden']],
			['label' => 'Portfolio', 'url' => '#portfolio', 'options' => ['class' => 'page-scroll']],
			['label' => 'About', 'url' => '#about', 'options' => ['class' => 'page-scroll']],
			['label' => 'Contact', 'url' => '#contact', 'options' => ['class' => 'page-scroll']],
			//['label' => 'About', 'url' => ['/site/about']],
			//['label' => 'Contact', 'url' => ['/site/contact']],
		];
/*
		if (Yii::$app->user->isGuest) {
			$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
			$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
		} else {
			$menuItems[] = [
				'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
				'url' => ['/site/logout'],
				'linkOptions' => ['data-method' => 'post']
			];
		}
*/
		echo Nav::widget([
			'options' => ['class' => 'navbar-nav navbar-right'],
			'items' => $menuItems,
		]);
		NavBar::end();
	?><!-- / Navigation -->


		<?= Breadcrumbs::widget([
			'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?>
		<?= Alert::widget() ?>
		<?= $content ?>
	</div><!-- /.wrap -->

	<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
<!-- P2END /WWW/yii.p2made.yii/frontend/views/layouts/main.php-->
