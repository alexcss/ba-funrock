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
						<img src="<?php echo $img['sizes']['fr-ipad-slider']  ?>" alt="<?php echo $img['sizes']['fr-ipad-slider']  ?>">
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
</main>
<?php endwhile;?>

<?php get_footer();
