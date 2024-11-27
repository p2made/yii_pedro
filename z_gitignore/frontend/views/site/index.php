<!-- P2BEGIN /WWW/yii.p2made.yii/frontend/views/site/index.php-->
<?php
/* @var $this yii\web\View */
$this->title = 'p2made';
?>
<div class="site-index">

	<!-- Header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<img class="img-responsive" src="//cdn.p2made.dev/common/img/p2m_header_t.png" alt="p2made" width="900" height="300">
					<div class="intro-text">
						<hr class="star-light">
						<span class="skills">Websites lovingly handcrafted by Pedro Plowman</span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Portfolio Grid Section -->
	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Portfolio</h2>
					<hr class="star-primary">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 portfolio-item">
					<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
						<div class="caption">
							<div class="caption-content">
								<i class="fa fa-search-plus fa-3x"></i>
							</div>
						</div>
						<img src="//cdn.p2made.dev/frontend/img/portfolio/classicbikesdirect.com.au.png" class="img-responsive" alt="">
					</a>
				</div>
				<div class="col-sm-4 portfolio-item">
					<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
						<div class="caption">
							<div class="caption-content">
								<i class="fa fa-search-plus fa-3x"></i>
							</div>
						</div>
						<img src="//cdn.p2made.dev/frontend/img/portfolio/atvdirect.com.au.png" class="img-responsive" alt="">
					</a>
				</div>
				<div class="col-sm-4 portfolio-item">
					<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
						<div class="caption">
							<div class="caption-content">
								<i class="fa fa-search-plus fa-3x"></i>
							</div>
						</div>
						<img src="//cdn.p2made.dev/frontend/img/portfolio/myfestivalsapp.com.png" class="img-responsive" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- About Section -->
	<section class="success" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>About</h2>
					<hr class="star-light">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-2">
					<p class="text-justify">Pedro specialises in data driven, user maintainable websites for small enterprises. Minimum viable product development means your website can be up and running quickly. Mobile first responsive design means your site will be great on all screen sizes.</p>
				</div>
				<div class="col-lg-4">
					<p class="text-justify">Pedro's work utilises first class, mature frameworks to ensure a great website to serve the needs of your business. Choose from <a href="http://yiiframework.com" target="_blank">Yii Framework 2</a> which has <a href="http://getbootstrap.com" target="_blank">Bootstrap CSS</a> integrated or <a href="http://wordpress.org" target="_blank">WordPress</a> with a Bootstrap based theme layer.</p>
				</div>
				<!-- <div class="col-lg-8 col-lg-offset-2 text-center">
					<a href="#" class="btn btn-lg btn-outline">
						<i class="fa fa-download"></i> Download Theme
					</a> -->
				</div>
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Contact Me</h2>
					<hr class="star-primary">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
					<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<form name="sentMessage" id="contactForm" novalidate>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Name</label>
								<input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Email Address</label>
								<input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Phone Number</label>
								<input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label>Message</label>
								<textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<br>
						<div id="success"></div>
						<div class="row">
							<div class="form-group col-xs-12">
								<button type="submit" class="btn btn-success btn-lg">Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="text-center">
		<div class="footer-above">
			<div class="container">
				<div class="row">
					<div class="footer-col col-md-4">
						<h3>Location</h3>
						<p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
					</div>
					<div class="footer-col col-md-4">
						<h3>Around the Web</h3>
						<ul class="list-inline">
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
							</li>
							<li>
								<a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
							</li>
						</ul>
					</div>
					<div class="footer-col col-md-4">
						<h3>About Freelancer</h3>
						<p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-below">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
						<p class="pull-left">Copyright &copy; p2made <?= date('Y') ?></p>
						<p class="pull-right"><?= Yii::powered() ?></p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
	<div class="scroll-top page-scroll visible-xs visble-sm">
		<a class="btn btn-primary" href="#page-top">
			<i class="fa fa-chevron-up"></i>
		</a>
	</div>

	<!-- Portfolio Modals -->
	<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<h2>Classic Bikes Direct</h2>
							<hr class="star-primary">
							<img src="//cdn.p2made.dev/frontend/img/portfolio/classicbikesdirect.com.au.png" class="img-responsive img-centered" alt="">
							<p class="text-justify">Classic Bikes Direct are resellers of an eclectic range of classic motorcycles. This online showroom was built with <a href="http://wordpress.org" target="_blank">WordPress</a> and provides an interface in which the client can make updates as stock changes.</p>
							<ul class="list-inline item-details">
								<li>Client:
									<strong><a href="http://classicbikesdirect.com.au" target="_blank">Classic Bikes Direct</a>
									</strong>
								</li>
								<li>Date: <strong>December 2013</strong>
								</li>
								<!--<li>Service:
									<strong><a href="http://startbootstrap.com">Web Development</a>
									</strong>-->
								</li>
							</ul>
							<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<h2>ATV Direct</h2>
							<hr class="star-primary">
							<img src="//cdn.p2made.dev/frontend/img/portfolio/atvdirect.com.au.png" class="img-responsive img-centered" alt="">
							<p class="text-justify">ATV Direct is a companion site to Classic Bikes Direct as an online showroom for their line of all terrain vehicles. Also built with <a href="http://wordpress.org" target="_blank">WordPress</a> and providing an interface for updates by the client.</p>
							<ul class="list-inline item-details">
								<li>Client:
									<strong><a href="http://atvdirect.com.au" target="_blank">ATV Direct</a>
									</strong>
								</li>
								<li>Date: <strong>December 2013</strong>
								</li>
								<!--<li>Service:
									<strong><a href="http://startbootstrap.com">Web Development</a>
									</strong>-->
								</li>
							</ul>
							<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<h2>Project Title</h2>
							<hr class="star-primary">
							<img src="//cdn.p2made.dev/frontend/img/portfolio/myfestivalsapp.com.png" class="img-responsive img-centered" alt="">
							<p class="text-justify">myFestivals App is Pedro's development love child aiming to deliver exciting mobile services to festivals and their patrons. The current site is a placeholder built with <a href="http://wordpress.org" target="_blank">WordPress</a> and will shortly be replaced by a more dynamic site built with <a href="http://yiiframework.com" target="_blank">Yii2</a></p>
							<ul class="list-inline item-details">
								<li>Client:
									<strong><a href="http://myfestivalsapp.com">myFestivals App</a>
									</strong>
								</li>
								<li>Date: <strong>ongoing</strong>
								</li>
								<!-- <li>Service:
									<strong><a href="http://startbootstrap.com">Web Development</a>
									</strong>
								</li> -->
							</ul>
							<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- P2END /WWW/yii.p2made.yii/frontend/views/site/index.php-->
