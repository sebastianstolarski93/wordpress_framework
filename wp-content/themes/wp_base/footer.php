	<?php get_template_part("partials/modals/talk_with_us"); ?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="<?= bloginfo('url') ?>">
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
						</div>
						<div class="col-md-6 col-xs-6">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
						</div>
						<div class="col-lg-6">
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?= wp_footer() ?>
	</body>
</html>
