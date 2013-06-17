<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
<head>
	<title>
		Spoor 11
		<?php 
		if (!is_home()) {
			wp_title( ' | ', true, 'left' );
		} else {
			wp_title( ' | ', true, 'right' );
		}
		?>
	</title>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/print.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<meta name='description' content="<?php bloginfo('description'); ?>">
	<meta charset="utf-8">

	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="stylesheets/ie.css">
	<![endif]--> 
	<!--[if IE lt9]>
	<script type="text/javascript" src="js/html5shiv.js"></script>
	<![endif]-->

</head>
<body>
<div id="outerWrap">
		<header>

			<nav id="headerNav">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>

			<div id="logo"><h1>Spoor 11</h1></div><!--  end logo  -->

			<div id="firstContact">
				<h2>Welkom</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div><!--  end firstContact  -->
			<div id="actionCall">CONTACT</div><!--  end actionCall  -->
			<div id="headerImageWrap">
				<div id="revealWrapAds">
					<div id="hiddenAds" class="revealOnHover">
						<h3>Aan De Slag</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
						</p>
					</div><!--  end hiddenAds  -->
					<img src="images/aandeslag.jpg" alt="Aan De Slag Alphen a/d Rijn">
				</div><!--  end revealWrapAds  -->
				<div id="revealWrapKdb">
					<div id="hiddenKdb" class="revealOnHover">
						<h3>Kinderboerderij</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
						</p>
					</div><!--  end hiddenKdb  -->
					<img src="images/kinderboerderij.jpg" alt="Kinderboerderij Boskoop">
				</div><!--  end revealWrapKdb  -->
				<div id="revealWrapIct">
					<div id="hiddenIct" class="revealOnHover">
						<h3>ICT-Lab</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
						</p>
					</div><!--  end hiddenIct  -->
					<img src="images/ictlab.jpg" alt="ICT-Lab Alphen a/d Rijn">
				</div><!--  end revealWrapIct  -->
			</div><!--  end headerImageWrap  -->
		</header>
	<div id="mainContent">
		<div id="columnWrap">
			<div id="leftColumn" class="columns">
				<h3>Deelnemers</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<img src="images/deelnemers.jpg" alt="Deelnemers Spoor 11">
			</div><!--  end leftColumn  -->
			<div id="middleColumn" class="columns">
				<h3>Opdrachtgevers</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<img src="images/opdrachtgevers.jpg" alt="Opdrachtgevers Spoor 11">
			</div><!--  end middleColumn  -->
			<div id="rightColumn" class="columns">
				<h3>Zorgverleners</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<img src="images/zorgverleners.jpg" alt="Zorgverleners Spoor 11">
			</div><!--  end rightColumn  -->
		</div><!--  end columnWrap  -->
	</div><!--  end mainContact  -->
</div><!--  end outerWrap  -->
</body>
</html>