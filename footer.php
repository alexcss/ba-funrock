<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</main>
		<div id="footer-container">
			<footer id="footer" class="row text-center">
				<div class="large-2 column large-text-left">
					<?php the_field('copyright', 'option'); ?>
				</div>
				<!-- /.large-3 column -->
				<div class="large-8 column menu-centered">
					<?php
					wp_nav_menu( array(
						'container'      => false,
						'menu_class'     => 'fr-footer-menu menu vertical medium-horizontal',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" >%3$s</ul>',
						'theme_location' => 'footer-nav',
						'depth'          => 3,
						'fallback_cb'    => false,
						'walker'         => new Foundationpress_Top_Bar_Walker(),
					));
					 ?>
				</div>
				<!-- /.large-3 column -->
				<div class="large-2 column fr-social-links large-text-right">
					<?php if (have_rows('socials', 'option')) : ?>
						<svg class="hide">
							<symbol id="facebook" width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"/></symbol>
							<symbol id="twitter" width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"/></symbol>
						</svg>
						 <?php while (have_rows('socials', 'option')) : the_row(); ?>
							<a class="fr-social" href="<?php the_sub_field('url'); ?>">
								<svg class="fr-social__icon">
									<use xlink:href="#<?php the_sub_field('icon'); ?>" />
								</svg>
							</a>
						 <?php endwhile; ?>
					<?php endif; ?>
				</div>
				<!-- /.medium-3 column -->
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
