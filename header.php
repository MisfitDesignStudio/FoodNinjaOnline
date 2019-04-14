<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Food_Ninja_Online
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
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'foodninjaonline'); ?></a>

		<header id="masthead" class="site-header">
			<div class="container site-header-container">

				<div class="site-branding">
					<a class="nav-logo-link" href="<?php echo get_home_url(); ?>">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/nav-logo-kitchen.svg" alt="">
					</a>
				</div><!-- .site-branding -->

				<div class="menu-hamburger">
					<div class="line line1"></div>
					<div class="line line2"></div>
					<div class="line line3"></div>
				</div>

				<?php
				// Begin ul.menu-list
				wp_nav_menu(array(
					'theme_location'	=> 'main-menu',
					'menu_id'					=> 'primary-menu',
					'container'				=> false,
					'items_wrap'			=> '<ul class="menu-list">%3$s</ul>',
				));
				?>

			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">