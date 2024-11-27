<?php
/**
 * _footer.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\helpers\Html;
use p2made\helpers\FA;
?>
<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 text-center">
				<h4><strong>p<sup>2</sup>made is Pedro fp</strong></h4>
				<p>Nambour, Qld 4560</p>
				<ul class="list-unstyled">
					<li>
						<i class="fa fa-phone fa-fw"></i>
						0400 4 pedro (0400 476 376) </li>
					<li>
						<i class="fa fa-envelope-o fa-fw"></i>
						<a href="mailto:pedrofp@me.com">pedrofp@me.com</a>
					</li>
				</ul>
				<br>
				<ul class="list-inline">
					<li>
						<a href="https://github.com/p2made" target=_blank">
							<i class="fa fa-github fa-fw fa-3x"></i>
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/pedro.plowman" target=_blank">
							<i class="fa fa-facebook fa-fw fa-3x"></i>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/bandidoofoz" target=_blank">
							<i class="fa fa-twitter fa-fw fa-3x"></i>
						</a>
					</li>
				</ul>
				<hr class="small">
				<p class="pull-left text-muted">
					Copyright <?= FA::i('copyright') ?> Pedro fp <?= date("Y") ?>
				</p>
				<p class="pull-right text-muted">
					<?= Yii::powered() ?>
				</p>
			</div>
		</div>
	</div>
</footer>

