<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
<head>
	<title>
		<?php 
		if (!is_home()) {
			wp_title( ' | ', true, 'left' );
		} else {
			wp_title( ' | ', true, 'right' );
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
<?php wp_head(); ?>
</head>
<body>
<div id="outerWrap">
		<header>
			<div id="headerNavWrap">
				<nav id="headerNav">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>
			</div><!--  end headerNavWrap  -->
			<div id="logo"><h1><a href="#"><img src="<?php echo SPOORWEG ?>/images/logo.png"></a></h1></div><!--  end logo  -->