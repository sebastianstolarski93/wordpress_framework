	<?php get_template_part("partials/modals/talk_with_us"); ?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a class="fx-logo-footer" href="<?= bloginfo('url') ?>">
						<img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="">
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 col-lg-push-8 col-md-push-6 col-sm-push-6">
					<div class="row">
						<div class="col-md-12">
							<h3>menu</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<ul>
								<li><a href="#">Services</a></li>
								<li><a href="#">Clients</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">How we work</a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<ul>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 col-lg-pull-3 col-md-pull-6 col-sm-pull-6">
					<div class="row">
						<div class="col-md-6 col-xs-6">
							<p>+48 12 446 66 85</p>
							<p>
								<a href="mailto:biuro@flexcommerce.com">biuro@flexcommerce.com</a>
							</p>
							<p>ul. Rzemieślnicza 1, 30-363 Kraków</p>
						</div>
						<div class="col-md-6 col-xs-6">
							<p>NIP: 6793089913</p>
							<p>Regon: 122786010</p>
							<p>KRS: 0000451091</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 fx-social">
							<h2>You find us on:</h2>

							<ul>
								<li>
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-behance"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-6 fx-lang">
							<h2>Change language:</h2>

							<form class="fx-form" method="post">
								<select class="" name="" onchange="this.form.submit()">
									<option value="en">EN</option>
									<option value="pl">PL</option>
								</select>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?= wp_footer() ?>
	</body>
</html>
