<?php

	$footer_address				= get_field('footer_address', 'options');
	$footer_scroll_top_icon		= get_field('footer_scroll_top_icon', 'options');
	$footer_open_times			= get_field('footer_open_times', 'options');
	$address_sodermalm			= get_field('address_sodermalm', 'options');
	$address_ginga				= get_field('address_ginga', 'options');
	$open_times_soder			= get_field('open_times_soder', 'options');
	$open_times_ginga			= get_field('open_times_ginga', 'options');

	$footer_bg					= get_field("footer_bg", 'options');
	
	$facebook					= get_field('facebook', 'options');
	$insta						= get_field('insta', 'options');

?>
		<footer class="wrapper section-padding" style="background-color:<?= $footer_bg; ?>">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-6 text-center">
						<?= $address_sodermalm; ?>
						<?= $open_times_soder; ?>
					</div>
					<div class="col-md-6 text-center">
						<?= $address_ginga; ?>
						<?= $open_times_ginga; ?>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-md-6 d-flex justify-content-around py-5">
						<a target="_blank" href="<?= $facebook; ?>">
							<i class="fa fa-facebook fa-2x"></i>
						</a>
						<a target="_blank" href="<?= $insta; ?>">
							<i class="fa fa-instagram fa-2x"></i>
						</a>
					</div>
				</div>
				<div class="skapad text-center"><a target="_blank" href="http://jasonnaso.com">Skapad med &hearts; av Jason Naso</a></div>
			</div>
			<?php wp_footer(); ?>
		</footer>
	</body>
</html>