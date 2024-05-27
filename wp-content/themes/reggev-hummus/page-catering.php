<?php

/*
Template name: Catering
Author: Jason Naso
*/

get_header();

 // BG Color
 $page_bg	= get_field('page_bg');

// Hero
$hero_image	= get_field('hero_image');
$hero_title = get_field('hero_title');
// Menu
$big_orders_title  = get_field('big_orders_title');
$big_orders_text  = get_field('big_orders_text');
$big_orders_veg  = get_field('big_orders_veg');
$big_orders_non_veg  = get_field('big_orders_non_veg');
$fam_veg_non_veg  = get_field('fam_veg_non_veg');

// SVG background color
$hero_svg_bg    = '#2b3b34';

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

<main>
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
                <div class="row d-flex justify-content-center section-padding-small">
                    <div class="col-md-12">
                        <?= $big_orders_title; ?>
                    </div>
                </div>
                <div class="row d-flex justify-content-center section-padding-small">
                    <div class="col-md-4">
                        <?= $big_orders_veg; ?>
                    </div>   
                    <div class="col-md-4">
                        <?= $big_orders_non_veg; ?>
                    </div> 
                    <div class="col-md-4">
                        <?= $fam_veg_non_veg; ?>
                    </div>    
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>



