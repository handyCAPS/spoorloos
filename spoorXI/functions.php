<?php 

	define('SPOORWEG', get_stylesheet_directory_uri());

	// Hier worden de stylesheets en scripts geladen

	function spoorxi_styles() {
		wp_register_style( 'normalize', SPOORWEG . '/stylesheets/normalize.css', 'all' );
		wp_register_style( 'print', SPOORWEG . '/stylesheets/print.css', 'print' );
		wp_register_style( 'screen', SPOORWEG . '/stylesheets/screen.css', 'screen' );
		wp_register_style( 'google_fonts', 'http://fonts.googleapis.com/css?family=Open+Sans', 'all' );

		wp_enqueue_style( 'google_fonts' );
		wp_enqueue_style( 'normalize' );
		wp_enqueue_style( 'print' );
		wp_enqueue_style( 'screen' );
	}

	add_action( 'wp_enqueue_scripts', 'spoorxi_styles' );

	function spoorxi_scripts() {
		wp_register_script( 'jquerylocal', SPOORWEG . '/js/jquery.min.js', array(),"false", 'true' );
		wp_register_script( 'jqueryui', SPOORWEG . '/js/jquery.ui.js', array(), "false", 'true' );
		wp_register_script( 'pin', SPOORWEG . '/js/jquery.pin.js', array(), "false", 'true' );
		wp_register_script( 'scrollto', SPOORWEG . '/js/scrollTo.js', array(), "false", 'true' );
		wp_register_script( 'localscroll', SPOORWEG . '/js/localScroll.js', array(), "false", 'true' );
		wp_register_script( 'spoorinit', SPOORWEG . '/js/spoorInit.js', array(), "false", 'true' );

		wp_enqueue_script( 'jquerylocal' );
		wp_enqueue_script( 'jqueryui' );
		wp_enqueue_script( 'pin' );
		wp_enqueue_script( 'scrollto' );
		wp_enqueue_script( 'localscroll' );
		wp_enqueue_script( 'spoorinit' );
	}

	add_action( 'wp_enqueue_scripts', 'spoorxi_scripts' );

?>