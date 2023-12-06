<?php
get_header();
?>

<main id="primary" class="site-main">

	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Последние статьи</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-9 col-sm-8">
				<div class="row">
					<?php
					while (have_posts()) :
						the_post();
					?>
						<div class="col-lg-4 col-sm-6">
							<div class="archive-card">
								<?php
								get_template_part('template-parts/content');

								// If comments are open or we have at least one comment, load up the comment template.
								if (comments_open() || get_comments_number()) :
									comments_template();
								endif;
								?>
							</div>
						</div>
					<?php
					endwhile; // End of the loop.
					?>
				</div>
			</div>

			<div class="col-lg-3 col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
</main>
</div>

<?php
get_footer();
