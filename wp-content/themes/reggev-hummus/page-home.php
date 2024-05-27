<?php

	/*
	Template name: Home
    Author: Jason Naso
	*/

	get_header();

	//Hero
	$random_images 	= get_field('random_images');
	$hero_title		= get_field("hero_title");
	// Intro
	$intro_text		= get_field("intro_text");
	$intro_title	= get_field("intro_title");
	$intro_bg		= get_field("intro_bg");
	// Locations
	$locations_repeater = get_field("locations_repeater");
	$locations_bg		= get_field("locations_bg");
	// Maps
	$maps_repeater 	= get_field("maps_repeater");
	$maps_bg		= get_field("maps_bg");
	// About
	$parallax_image	= get_field("parallax_image");
	$about_title   	= get_field("about_title");
	$about_text   	= get_field("about_text");
	// Contact Form
	$contact_title 	= get_field("contact_title");
	$contact_form   = get_field("contact_form");
	$contact_bg		= get_field("contact_bg");

	// Shuffle Hero Image
    shuffle($random_images);
    $random_img_url = $random_images[0]['image']['url'];
?>
<style>
	.hero-image {
		background-image: url("<?=$random_img_url;?>");
	}
	/* @media only screen and (min-width: 300px) {
		.hero-image {
			background-image: url("<?=$hero_image["sizes"]["medium_large"];?>");
		}
	}
	@media only screen and (min-width: 768px) {
		.hero-image {
			background-image: url("<?=$hero_image["url"];?>");
		}
	} */

	.parallax-image {
		background-image: url("<?=$parallax_image["sizes"]["medium"];?>");
	}
	@media only screen and (min-width: 300px) {
		.parallax-image {
			background-image: url("<?=$parallax_image["sizes"]["medium_large"];?>");
		}
	}
	@media only screen and (min-width: 768px) {
		.parallax-image {
			background-image: url("<?=$parallax_image["url"];?>");
		}
	}
</style>
<main class="home">
	<?php if ($random_img_url) : ?>
		<section class="hero">
			<div class="hero-image home-hero">
				<div class="hero-image-overlay">
					<div class="container">
						<h1 id="heroTitle" class="hero-title font-color-light">
							<?= $hero_title; ?>
						</h1>
					</div>
				</div>
				<svg class="hero-svg" viewBox="0 0 100 100" preserveAspectRatio="none" fill="<?= $intro_bg; ?>">
					<polygon points="0, 0 100, 100 0, 100"></polygon>
				</svg>
			</div>
		</section>
	<?php endif; ?>	
	<?php if ($intro_text) : ?>
		<section class="intro section-padding" style="background-color:<?= $intro_bg; ?>"> 
			<div class="container">
				<div class="row d-flex justify-content-center">
				<a class="intro-cta" target="_blank" href="https://eat.orderhero.se/reggevsoder">Takeaway<br>Seed Södermalm</a>
				<a class="intro-cta" target="_blank" href="https://eat.orderhero.se/reggevginga">Takeaway<br>Ginga Vasastan</a>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-10 font-color-light">
						<?= $intro_title; ?>
						<?= $intro_text; ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>	
	<?php if ($locations_repeater) : ?>
		<section class="locations section-padding" style="background-color:<?= $locations_bg; ?>">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<?php foreach ($locations_repeater as $k => $r) : ?>
						<div class="col-lg-6">
							<div class="text-center hover-effect location-img overlay" style="background-image: url(<?= $r["location_image"]["url"];?>)" >
								<div class="image-wrapper">
									<a target="_blank" href="<?= $r["instagram_link"]; ?>">
										<div class="post-thumb">
											<div class="caption-text">
												<h2><?= $r["location_title"]; ?></h2>
												<p><?= $r["location_text"]; ?></p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="location-info text-center font-color-light">
								<?= $r["location_info"]; ?>
								<?php
								$string = $r["telephone"];
								$string = preg_replace("/[\s-]+/", "", $string);
								?> 
								<a href="tel:+46<?= $string; ?>"><?= $r["telephone"]; ?></a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section> 
	<?php endif; ?>
	<?php if ($maps_repeater) : ?>
		<section class="maps section-padding" style="background-color:<?= $maps_bg; ?>">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<?php foreach ($maps_repeater as $k => $r) : ?>
						<div class="col-sm text-center">
							<a href="<?= $r["map_link"]?>" target="_blank">
								<h3 class="map-title"><?= $r["map_text"]?></h3>
								<img class="img-fluid map-imgs zoom" src="<?= $r["map_image"]["url"]; ?>" alt="<?= $r["map_image"]["alt"]; ?>">
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section> 
	<?php endif; ?>
	<?php if ($parallax_image) : ?>
		<section class="parallax">
			<div class="parallax-image">
				<div class="parallax-image-overlay">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="col-sm-12">
								<h2 class="section-title text-center"><?= $about_title; ?></h1>
							</div>
							<div class="col-sm-10">
								<div class="about-text"><?= $about_text; ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php if($contact_form) : ?>
		<section class="contact-form section-padding" id="contactForm" style="background-color:<?= $contact_bg; ?>">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-sm-12 font-color-light">
						<h2 class="section-title text-center"><?= $contact_title; ?></h1>
					</div>
					<?php echo $contact_form; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
</main>

<?php
	get_footer();
?>