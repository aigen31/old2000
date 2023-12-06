<?php

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package old2000
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
	return;
}
?>

<hr>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if (have_comments()) :
	?>
		<h2 class="comments-title">
			<?php
			$old2000_comment_count = get_comments_number();
			if ('1' === $old2000_comment_count) {
				printf(
					/* translators: 1: title. */
					esc_html__('Комментарий к статье &ldquo;%1$s&rdquo;', 'old2000'),
					'<span>' . wp_kses_post(get_the_title()) . '</span>'
				);
			} else {
				printf(
					/* translators: 1: comment count number, 2: title. */
					esc_html(_nx('%1$s комментариев к статье &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $old2000_comment_count, 'comments title', 'old2000')),
					number_format_i18n($old2000_comment_count), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post(get_the_title()) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if (!comments_open()) :
		?>
			<p class="no-comments"><?php esc_html_e('Комментарии закрыты.', 'old2000'); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().

	if (is_user_logged_in()) {
		comment_form();
	} else {
	?>
		<p>
			<?php
			echo esc_html('Только зарегистрированные пользователи могут оставлять комментарии');
			?>
		</p>
	<?php
	}
	?>

</div><!-- #comments -->