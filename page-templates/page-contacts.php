<?php
/*
Template Name: Contacts
*/
get_header(); ?>

<?php get_template_part( 'template-parts/page-intro' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<!-- BEGIN row  -->
		<div class="row">
		    <!-- BEGIN column medium-4  -->
		    <div class="column medium-4">
		        OUR OFFICE
		    </div>
		    <!-- END column medium-4 -->
		    <!-- BEGIN column medium-4  -->
		    <div class="column medium-8">
		        <h4><?php the_field('form_title'); ?></h4>
		        <?php the_field('contact_form'); ?>
		    </div>
		    <!-- END column medium-4 -->
		</div>
		<!-- END row -->
		<?php
		$location = get_field('map');

		if( !empty($location) ):
			?>
		<div class="acf-map">
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
		</div>
	<?php endif; ?>
</article>
<?php endwhile;?>


<?php get_footer();
