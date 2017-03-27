<?php
	$bgImage = get_field('background_image');
	$styleBgImage = $bgImage ? 'style="background-image: url(' . $bgImage['url'] . ')"' : "";
?>
<section class="ba-intro"  <?php echo $styleBgImage ?> >
	<!-- BEGIN row column  -->
	<div class="row column ba-intro__body">

		<h1 class="ba-page-title">
		<?php if(get_field('title')) : ?>
			<?php the_field('title'); ?>
		<?php else : ?>
			<?php the_title() ?>
		<?php endif; ?>
		</h1>

	    <h3 class="ba-intro__subtitle">
			<?php the_field('subtitle'); ?>
	    </h3>
	</div>
	<!-- END row column -->
</section>
<!-- /.ba-intro -->
