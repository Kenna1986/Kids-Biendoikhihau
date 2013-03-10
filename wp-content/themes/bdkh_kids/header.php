<?php
/*
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Kids-BDKH
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset') ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri() ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="top-wrapper">
	<header>
		<div id="nasa-header" class="clearfix">
    		<div class="container">
                <a href="http://biendoikhihau.cantho.gov.vn" title="<?php _e('Can Tho climate change office', 'bdkh_kids') ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" title="<?php _e('Can Tho climate change office', 'bdkh_kids') ?>" alt="<?php _e('Can Tho climate change office', 'bdkh_kids') ?>" />
                </a>
                <span>
                    <a href="http://biendoikhihau.cantho.gov.vn" title="<?php _e('Can Tho climate change office', 'bdkh_kids') ?>">
                        <?php _e('Can Tho climate change office', 'bdkh_kids') ?>
                    </a>
                </span>
                <div id="search">
                    <form id="search-form" action="<?php echo home_url('/') ?>" method="get">
                        <input type="text" placeholder="<?php _e('Search', 'bdkh_kids') ?>" name="s" value="<?php echo get_query_var('s') ?>" />
                    </form>
                </div>
            </div>
		</div>
		<div id="climate-kids-header" class="clearfix">
		    <nav id="nav">
		        <div class="home">
                    <a href="<?php echo home_url('/') ?>" title="<?php bloginfo('name') ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/images/icon-home.png" alt="<?php bloginfo('name') ?>" title="<?php bloginfo('name') ?>" />
                    </a>
		        </div>
                <?php wp_nav_menu(array('menu' => 'primary', 'container_id' => 'header-menu')) ?>
		    </nav>
		</div>
	</header><!-- header -->

	<div id="main" role="main">

	    <?php get_sidebar('left') ?>