<div class="row">
	<div class="col-md-3">
		<?php
		echo do_shortcode("[uwp_profile_header]");
		?>
	</div>

	<div class="col-md-9">
		<?php
		echo do_shortcode("[uwp_profile_tabs]");
		?>
	</div>

	<?php
	// if (user_has_role(get_current_user_id(), 'subscriber') && !is_email_verified()) {
	// 	get_template_part('template-parts/email', 'check');
	// }
	?>
</div>