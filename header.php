<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
<head>
	<title>
		<?php 
		if (is_home() && !is_page()){
			bloginfo('name'); echo " | "; the_title();
		}
		elseif (is_home() && is_page()) {
			bloginfo('name'); wp_title( ' | ', true, 'left' );
			}	
		else {
			  wp_title( ' | ', true, 'right' );	bloginfo('name');
	}
	?>
	</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo SPOORWEG; ?>/style.css">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<meta name='description' content="<?php bloginfo('description'); ?>">
	<meta charset="utf-8">

	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php echo SPOORWEG ?>/stylesheets/ie.css">
	<![endif]--> 
	<!--[if IE lt9]>
	<script type="text/javascript" src="<?php echo SPOORWEG ?>/js/html5shiv.js"></script>
	<![endif]-->
	<!--[if IE lt8]>
	<link rel="stylesheet" type="text/css" href="<?php echo SPOORWEG; ?>/fonts/font-awesome/css/font-awesome-ie7.min.css">
	<![endif]-->
<?php wp_head(); ?>
</head>
<body>
<div id="outerWrap">
		<header>
			<div id="headerNavWrap">
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'header_menu',
						'menu'            => '',
						'container'       => 'nav', 
						'container_class' => 'menu-{menu slug}-container', 
						'container_id'    => 'headerNav',
						'menu_class'      => 'menu', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '', 
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '' ) );
				 ?>
			</div><!--  end headerNavWrap  -->
			<div id="logo"><h1><a href="<?php bloginfo('url'); ?>"><img src="<?php echo SPOORWEG ?>/images/logo.png"></a></h1></div><!--  end logo  -->