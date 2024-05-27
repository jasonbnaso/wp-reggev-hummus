<?php

	/*
	Template name: Menu
    Author: Jason Naso
	*/

	get_header();
    // BG Color
	$page_bg	= get_field('page_bg');
	// Hero
	$hero_image	= get_field('hero_image');
	$hero_title = get_field('hero_title');
    // Menu
    $veg_list_repeater  = get_field('veg_list_repeater');
    $non_veg_list_repeater  = get_field('non_veg_list_repeater');
    $shakshuka_list_repeater  = get_field('shakshuka_list_repeater');
    $side_dish_list_repeater  = get_field('side_dish_list_repeater');
    $des_repeater  = get_field('des_repeater');
    // Titles
    $veg_title  = get_field('veg_title');
    $non_veg_title   = get_field('non_veg_title');
    $shakshuka_title   = get_field('shakshuka_title');
    $side_dish_title   = get_field('side_dish_title');
    $hummus_description   = get_field('hummus_description');
    $sides_description   = get_field('sides_description');
    $sides_description_title   = get_field('sides_description_title');
    $des_title   = get_field('des_title');

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
                <div class="row">
                    <div class="col-md-8 fade-element"><?= $veg_title; ?></div>
                    <div class="col-md-4 fade-element"><?= $sides_description_title; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-8 fade-element"><?= $hummus_description; ?></div>
                    <div class="col-md-4 custom-font fade-element"><?= $sides_description; ?></div>
                </div>
                <?php if($veg_list_repeater) : ?>
                    <div class="row">
                        <?php foreach ($veg_list_repeater as $r) : ?>
                            <div class="col-md-4 fade-element">
                                <?= $r["item"]; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="section-padding-small">
                    <div class="row">
                        <div class="col-md-12"><?= $non_veg_title; ?></div>
                    </div>
                    <?php if($non_veg_list_repeater) : ?>
                        <div class="row">
                            <?php foreach ($non_veg_list_repeater as $r) : ?>
                                <div class="col-md-4 fade-element">
                                    <?= $r["item"]; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="section-padding-small">
                    <div class="row">
                        <div class="col-md-12"><?= $shakshuka_title; ?></div>
                    </div>
                    <?php if($shakshuka_list_repeater) : ?>
                        <div class="row">
                            <?php foreach ($shakshuka_list_repeater as $r) : ?>
                                <div class="col-md-4 fade-element">
                                    <?= $r["item"]; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="section-padding-small">
                    <div class="row">
                        <div class="col-md-12"><?= $side_dish_title; ?></div>
                    </div>
                    <?php if($side_dish_list_repeater) : ?>
                        <div class="row">
                            <?php foreach ($side_dish_list_repeater as $r) : ?>
                                <div class="col-md-4 fade-element">
                                    <?= $r["item"]; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="section-padding-small">
                    <div class="row">
                        <div class="col-md-12"><?= $des_title; ?></div>
                    </div>
                    <?php if($des_repeater) : ?>
                        <div class="row">
                            <?php foreach ($des_repeater as $r) : ?>
                                <div class="col-md-4 fade-element">
                                    <?= $r["des_item"]; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
	get_footer();
?>



