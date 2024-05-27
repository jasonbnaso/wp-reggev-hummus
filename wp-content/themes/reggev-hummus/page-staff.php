<?php

/*
	Template name: Staff
    Author: Jason Naso
	*/

get_header();

$content_repeater = get_field("content_repeater");
$heading	      = get_field("heading");
$intro_bg		  = get_field("intro_bg");

?>
<main>
	<section class="intro section-padding font-color-light" style="background-color:#2b3b34">
		<div class="container">
			<?php if ($heading) : ?>
				<div class="row margin-bottom">
					<div class="col-sm-10">
						<?= $heading; ?>
					</div>
				</div>
			<?php endif; ?>
		<?php if ($content_repeater) : ?>
			<?php foreach ($content_repeater as $r) : ?>
				<div class="row margin-bottom">
					<div class="col-sm-6">
						<?= $r["content_left"]; ?>
					</div>
					<?php if ($r["select_img_content"] === "image" && $r["image"]) : ?>
						<div class="col-sm-6">
							<img class="img-fluid" src="<?= $r["image"]["url"]; ?>" alt="<?= $r["image"]["alt"]; ?>">
						</div>
					<?php elseif ($r["select_img_content"] === "content" && $r["content_right"]) : ?>
						<div class="col-sm-6">
							<?= $r["content_right"]; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</section>
</main>

<?php
get_footer();
?>