<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package old2000
 */

get_header();
?>

<main id="primary" class="site-main">

	<div class="container">
		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description('<div class="archive-description">', '</div>');
				?>
			</header><!-- .page-header -->
			<div class="row">
				<div class="col-lg-9 col-sm-8">
					<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();
					?>
						<div class="col-lg-4 col-sm-6">
							<div class="archive-card">
								<?php
								/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
								get_template_part('template-parts/content', get_post_type());

								?>
							</div>
						</div>


					<?php

					endwhile;

					?>
				</div>
				<div class="col-lg-3 col-sm-4">
					<?php
					get_sidebar();
					?>
				</div>
			</div>
		<?php

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>
	</div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
