<?php
/*
Template Name: Our Games
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
	$bgImage = get_field('background_image');
?>
<section class="ba-intro ba-intro--our-games" style="background-image: url(<?php echo $bgImage['url'] ?>)">
		<?php
			$titleLogo = get_field('title_logo');
		?>
		<img class="ba-intro__logo" src="<?php echo $titleLogo['url'] ?>" alt="<?php bloginfo('name') ?>">
</section>
<!-- /.ba-intro -->
<div class="fr-main-our-games">
	<section>
		<div class="row">
			<!-- BEGIN column medium-6  -->
			<div class="column medium-6">
				<!-- BEGIN fr-ipad  -->
				<div class="fr-ipad">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/iPad.png' ?>" alt="iPad">
					<div class="fr-ipad-slider">
						<?php $slider = get_field('slider'); ?>
						<?php foreach ($slider as $img): ?>
							<img src="<?php echo $img['sizes']['fr-ipad-slider']  ?>" alt="<?php echo $img['title']  ?>">
						<?php endforeach ?>
					</div>
					<!-- /.fr-ipad-slider -->
				</div>
				<!-- END fr-ipad -->
				<h6 class="text-center fr-ipad__footer-text"><?php the_field('slider_footer_text'); ?></h6>
			</div>
			<!-- END column medium-6 -->
			<!-- BEGIN column medium-6  -->
			<div class="column medium-6">
				<?php the_content(); ?>
				<?php if (get_field('trailer_url')): ?>
					<a data-rel="lightbox" class="fr-trailer-button button" href="<?php the_field('trailer_url') ?>">
						<?php the_field('trailer_button_text'); ?>
					</a>
				<?php endif ?>
				<!-- BEGIN fr-features  -->
				<div class="fr-features">
				    <?php the_field('features'); ?>

					<?php if (get_field('app_store_link')): ?>
						<a class="fr-store-link fr-store-link--apple" href="<?php the_field('app_store_link'); ?>">
							AppStore
						</a>
					<?php endif ?>
					<?php if (get_field('play_market_link')): ?>
						<a class="fr-store-link fr-store-link--google" href="<?php the_field('play_market_link'); ?>">
							PlayMarket
						</a>
					<?php endif ?>
				</div>
				<!-- END fr-features -->
			</div>
			<!-- END column medium-6 -->
		</div>
		<!-- /.row column -->
	</section>

	<section class="ba-screnshots-section">
		<div class="row column">
			<h3><?php the_field('screenshots_title'); ?></h3>

			<?php $screenshots = get_field('screenshots'); ?>
			<!-- BEGIN row  -->
			<div class="row">
				<?php foreach ($screenshots as $img): ?>
					<!-- BEGIN column medium-6 large-4  -->
					<div class="column medium-6 large-4">
						<a href="<?php echo $img['url']  ?>" class="ba-screenshot" data-rel="lightbox" data-button="<?php _e('View Gallery') ?>">
							<img src="<?php echo $img['sizes']['fr-screenshot']  ?>" alt="<?php echo $img['title']  ?>">
						</a>
					</div>
					<!-- END column medium-6 large-4 -->
				<?php endforeach ?>
			</div>
			<!-- END row -->
		</div>
		<!-- /.row column -->
	</section>
</div>
<?php endwhile;?>

<?php get_footer();
