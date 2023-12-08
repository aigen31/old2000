<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package old2000
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'old2000'); ?></a>

		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="site-branding">
							<?php
							if (!empty(get_custom_logo())) :
								the_custom_logo();
							else :
								if (is_front_page() && is_home()) :
							?>
									<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
								<?php
								else :
								?>
									<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
								<?php
								endif;
								$old2000_description = get_bloginfo('description', 'display');
								if ($old2000_description || is_customize_preview()) :
								?>
									<p class="site-description"><?php echo $old2000_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																							?></p>
							<?php endif;
							endif; ?>
						</div><!-- .site-branding -->


					</div>

					<div class="col-md-auto ms-auto">
						<div class="site-header__right">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Разделы сайта', 'old2000'); ?></button>
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
							</nav><!-- #site-navigation -->


							<div class="main-login">
								<?php if (!is_user_logged_in()) : ?>
									<a href="/registration" class="site-header__btn">
										<img class="site-header__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/register.png" alt="">
										<p>Регистрация</p>
									</a>
									<a href="/login" class="site-header__btn">
										<img class="site-header__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/login.png" alt="">
										<p>Войти</p>
									</a>
								<?php else :
									$current_user = wp_get_current_user();
								?>
									<div class="site-header__info">
										<img class="site-header__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/register.png" alt="">
										<p><?php printf(__('Здравствуйте, %s', 'old2000'), esc_html($current_user->user_login) . '!'); ?></p>
									</div>
									<div class="site-header__user-links">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-2',
												'menu_id'        => 'user-menu',
											)
										);
										?>
									</div>

								<?php endif; ?>

								<ul class="site-header__social-list">
									<li class="site-header__social-item">
										<a href="<?php echo esc_url('https://openvk.su/old2000'); ?>" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ovk.png" class="site-header__social-icon" alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="container">
			<div class="row">
				<div class="col">
					<?php
					if (function_exists('yoast_breadcrumb')) {
						yoast_breadcrumb('<p class="breadcrumbs" id="breadcrumbs">', '</p>');
					}
					?>
				</div>
			</div>
		</div>