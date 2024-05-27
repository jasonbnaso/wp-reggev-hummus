<?php

	/*
	Template name: Open Times
    Author: Jason Naso
	*/

	get_header();

	 // BG Color
	 $page_bg	= get_field('page_bg');
	// Hero
	$hero_image	= get_field('hero_image');
	$hero_title = get_field('hero_title');
    // Menu
    $open_times_repeater = get_field('open_times_repeater');

?>
<style>
	.hero-image {
		background-image: url('<?=$hero_image['sizes']['medium'];?>');
	}
	@media only screen and (min-width: 300px) {
		.hero-image {
			background-image: url('<?=$hero_image['sizes']['medium_large'];?>');
		}
	}
 
	@media only screen and (min-width: 768px) {
		.hero-image {
			background-image: url('<?=$hero_image['url'];?>');
		}
	}
</style>

<main class="menu"> 
    <section class="hero">
		<div class="hero-image">
			<div class="hero-image-overlay">
				<div class="container">
					<h1 id="heroTitle" class="hero-title font-color-light"><?= $hero_title; ?></h1>
				</div>
			</div>
			<svg class="hero-svg" viewBox="0 0 100 100" preserveAspectRatio="none" fill="<?=$page_bg; ?>">
			     <polygon points="0, 0 100, 100 0, 100"></polygon>
			</svg>
		</div>
	</section>
    <section class="menu section-padding" style="background-color:<?= $page_bg; ?>">
        <div class="container">
            <div class="custom-border">
                <?php if ($open_times_repeater) : ?>
                    <div class="open-times d-flex flex-wrap justify-content-center text-center">
                        <?php foreach ($open_times_repeater as $k => $r) : ?>
                            <?= $r["open_time"]; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                
        </div>
    </section>
</main>

<?php
	get_footer();
?>



