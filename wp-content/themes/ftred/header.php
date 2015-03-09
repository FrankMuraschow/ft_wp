<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package FT_Red
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/themes/ftred/layouts/content-sidebar.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="ft-header-banner">
		<img src="/wp-content/themes/ftred/img/ft_banner.png" />
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e('Primary Menu', 'ftred'); ?></button>
			<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
		</nav><!-- #site-navigation -->
	</div>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'ftred'); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding" hidden>
			<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			<h2 class="site-description"><?php bloginfo('description'); ?></h2>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->
	<div id="content" class="site-content">