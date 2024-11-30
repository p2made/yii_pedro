<?php
/**
 * _navigation.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Nav;
use yii\helpers\ArrayHelper;
use p2made\helpers\FA;

$onclick = ' onclick=$("#menu-close").click();';
$menuItems = [
	'<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">' . FA::i('times') . '</a>',
	'<li class="sidebar-brand"><a href="#top"' . $onclick . '>p<sup>2</sup>made</a></li>',
	'<li><a href="#top"' . $onclick . '>Home</a></li>',
	'<li><a href="#myfestivals-app"' . $onclick . '>myFestivals App</a></li>',
	'<li><a href="#sewing"' . $onclick . '>Sewing</a></li>',
	'<li><a href="#programming"' . $onclick . '>Programming</a></li>',
	'<li><a href="#camp-kitchen"' . $onclick . '>Camp Kitchen</a></li>',
];
?>
<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
	<?php
		echo Nav::widget([
			'options' => ['class' => 'sidebar-nav'],
			'items' => $menuItems,
		]);
	?>
</nav>
