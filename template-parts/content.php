<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package old2000
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php old2000_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
			<!-- <div class="entry-meta">
				<?php
				// old2000_posted_on();
				// old2000_posted_by();
				?> -->
			<!-- </div> -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<hr>

	<div class="entry-content">
		<?php
		if (is_home() || is_front_page() || is_archive()) :
			the_excerpt();
		else :
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Продолжить чтение<span class="screen-reader-text"> "%s"</span>', 'old2000'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);
		endif;

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'old2000'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php old2000_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->