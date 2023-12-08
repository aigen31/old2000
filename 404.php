<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package old2000
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<div class="container">
			<div class="row">
				<div class="col">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e('Ой! Ничего не найдено...', 'old2000'); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e('Но вы можете поискать наши другие статьи =)', 'old2000'); ?></p>

						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/dog-reading.gif'); ?>" alt="">

						<?php
						get_search_form();

						the_widget('WP_Widget_Recent_Posts');
						?>

						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e('Популярные категории', 'old2000'); ?></h2>
							<ul>
								<?php
								wp_list_categories(
									array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									)
								);
								?>
							</ul>
						</div><!-- .widget -->

						<?php
						/* translators: %1$s: smiley */
						$old2000_archive_content = '<p>' . esc_html__('Попробуйте поискать в архиве:', 'old2000') . '</p>';
						the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$old2000_archive_content");

						the_widget('WP_Widget_Tag_Cloud');
						?>

					</div><!-- .page-content -->
				</div>
			</div>
		</div>

	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
