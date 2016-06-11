<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package marketingblog
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="header_wrapper" role="navigation">
			<div class="container">
				<div class="row">
					<div class="site-navigation-inner col-sm-12">
						<div class="navbar-header side-header">
							<button class="site-nav-toggle">
								<span class="sr-only"><?php echo __('Toggle navigation', 'marketingblog-lite');?></span>
								<i class="fa fa-bars fa-2x"></i>
							</button>

							<?php if( get_header_image() != '' ) : ?>

							<div id="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/></a>
							</div><!-- end of #logo -->

							<?php endif; // header image was removed ?>

							<?php if( !get_header_image() ) : ?>

							<div id="logo">
								<span class="site-name"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php esc_html( bloginfo( 'name' )) ; ?></a></span>
							</div><!-- end of #logo -->

							<?php endif; // header image was removed (again) ?>

						</div>
						<nav class="site-nav pull-right" role="navigation">
							<?php
								wp_nav_menu(array('theme_location'=>'primary','depth'=>0,'fallback_cb' =>false,'container'=>'','container_class'=>'main-menu','menu_id'=>'menu-main','menu_class'=>'main-nav','link_before' => '<span class="menu-item-label">', 'link_after' => '</span>','items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s</ul>'));
							?>
						</nav>

					</div>
				</div>
			</div>
		</div><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

