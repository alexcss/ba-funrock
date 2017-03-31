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
<main>
	<section>
		<div class="row">
			<!-- BEGIN column medium-6  -->
			<div class="column medium-6">
				<div class="fr-ipad-slider">
					<?php $slider = get_field('slider'); ?>
					<?php foreach ($slider as $img): ?>
						<img src="<?php echo $img['sizes']['fr-ipad-slider']  ?>" alt="<?php echo $img['title']  ?>">
					<?php endforeach ?>
				</div>
				<!-- /.fr-ipad-slider -->
			</div>
			<!-- END column medium-6 -->
			<!-- BEGIN column medium-6  -->
			<div class="column medium-6">

			</div>
			<!-- END column medium-6 -->
		</div>
		<!-- /.row column -->
	</section>

	<section>
		<div class="row column">
			<h3><?php the_field('screenshots_title'); ?></h3>

			<?php $screenshots = get_field('screenshots'); ?>
			<!-- BEGIN row  -->
			<div class="row">
				<?php foreach ($screenshots as $img): ?>
					<!-- BEGIN column medium-6 large-4  -->
					<div class="column medium-6 large-4">
						<a href="<?php echo $img['url']  ?>" class="ba-screenshot" data-button="<?php _e('View Gallery') ?>">
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
</main>
<?php endwhile;?>

<?php get_footer();
