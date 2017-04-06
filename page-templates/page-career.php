<?php
/*
Template Name: Career
*/
get_header(); ?>

<?php get_template_part( 'template-parts/page-intro' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php endwhile;?>

<!-- BEGIN row  -->
<div class="row">
    <!-- BEGIN column   -->
    <div class="column medium-8">
        <h3>AVAILABLE POSITIONS:</h3>
		<?php
		$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
		$careerArgs = array(
			'post_type'=>'job',
			'posts_per_page'=>2,
			'paged' => $paged
		);

		$career = new WP_Query($careerArgs);?>
		<?php if($career->have_posts()): ?>
			<?php while($career->have_posts()): $career->the_post() ?>
				<article class="ba-job">
					<h3>
						<a href="<?php the_permalink() ?>">
							<?php the_title(); ?>
						</a>
					</h3>
					<?php the_content(); ?>
					<a href="<?php the_permalink() ?>" class="button">
						<?php _e('Apply now') ?>
					</a>
				</article>
			<?php endwhile; ?>
			<nav id="post-nav">
				<div class="post-previous">
				<?php echo get_next_posts_link( 'Older Entries', $career->max_num_pages ); // display older posts link ?>

				<div class="post-next">
				<?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>

				</div>
			</nav>

			<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<?php } ?>

		<?php endif;?>

    </div>
    <!-- END column  -->
    <!-- BEGIN column   -->
    <div class="column medium-4">
        <h4>Are you a hungry game lover?</h4>
    </div>
    <!-- END column  -->
</div>
<!-- END row -->
<?php get_footer();
