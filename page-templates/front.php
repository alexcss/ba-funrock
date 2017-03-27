<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
	$bgImage = get_field('background_image');
?>
<section class="ba-intro" style="background-image: url(<?php echo $bgImage['url'] ?>)">
	<!-- BEGIN row column  -->
	<div class="row column ba-intro__body">
		<?php
			$titleLogo = get_field('title_logo');
		?>
		<img src="<?php echo $titleLogo['url'] ?>" alt="<?php bloginfo('name') ?>">

	    <h3 class="ba-intro__subtitle">
			<?php the_field('subtitle'); ?>
	    </h3>
	</div>
	<!-- END row column -->
</section>
<!-- /.ba-intro -->
<main>
	<section>
		<div class="row column">
			<!-- BEGIN ba-intro-rows  -->
			<div class="ba-intro-rows">
				<!-- BEGIN ba-home-games  -->
				<div class="ba-home-games">
					<!-- BEGIN   -->
					<?php $image = get_field('games_image'); ?>
					<div class="ba-home-games__image" style="background-image: url(<?php echo $image['url'] ?>)">
						<img src="<?php echo $image['url'] ?>" alt="<?php the_field('games_title'); ?>">
					</div>
					<!-- END  -->
					<!-- BEGIN   -->
					<div class="ba-home-games__content">
						<h3 class="ba-home-games__title"><?php the_field('games_title'); ?></h3>
						<?php the_field('games_text'); ?>
						<!-- BEGIN text-center  -->
						<div class="text-center">
							<a class="button" href="<?php the_field('games_button_link'); ?>">
								<?php the_field('games_button_text'); ?>
							</a>
						</div>
						<!-- END text-center -->
					</div>
					<!-- END  -->
				</div>
				<!-- END ba-home-games -->
				<!-- BEGIN ba-home-about  -->
				<div class="ba-home-about">
					<!-- BEGIN   -->
					<?php $image = get_field('about_image'); ?>
					<div class="ba-home-about__image" style="background-image: url(<?php echo $image['url'] ?>)">
						<img src="<?php echo $image['url'] ?>" alt="<?php the_field('about_title'); ?>">
					</div>
					<!-- END  -->
					<!-- BEGIN   -->
					<div class="ba-home-about__content">
						<h3 class="ba-home-about__title"><?php the_field('about_title'); ?></h3>
						<?php the_field('about_text'); ?>
						<a class="button" href="<?php the_field('about_button_link'); ?>">
							<?php the_field('about_button_text'); ?>
						</a>
					</div>
					<!-- END  -->
				</div>
				<!-- END ba-home-about -->
			</div>
			<!-- END ba-intro-rows -->
		</div>
		<!-- /.row column -->
	</section>
</main>
<?php endwhile;?>

<?php get_footer();
