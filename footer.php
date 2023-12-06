<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package old2000
 */

?>
<a href="https://beget.com/p1627316" target="_blank" class="beget-ad">
	<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/beget.png') ?>" alt="">
</a>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="row justify-content-md-between">
			<div class="col-sm-auto">
				<div class="site-info">
					<p class="copyright">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						echo esc_html__('©old2000, ' . get_the_date('Y') . '. все права защищены.', 'old2000')
						?>
					</p>
					<!-- <span class="sep"> | </span> -->
				</div><!-- .site-info -->
			</div>

			<div class="col-sm-auto">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-3',
						'menu_id'        => 'footer-menu',
					)
				);
				?>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>