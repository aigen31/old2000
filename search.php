<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package old2000
 */

get_header();
?>

<main id="primary" class="site-main">

	<div class="container">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf(esc_html__('Результаты поиска: %s', 'old2000'), '<span>' . get_search_query() . '</span>');
					?>
				</h1>
			</header><!-- .page-header -->
			<div class="row">
				<div class="col-md-9">
					<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
					?>
						<div class="col-md-4">
							<?php
							get_template_part('template-parts/content', 'search');
							?>
						</div>
				<?php

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>
				</div>

				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
