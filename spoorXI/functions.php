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

	// De custom menu's 

	function spoorxi_nav_menus() {

		$locations = array(
			'header_menu' => __('Header Menu', 'text-domain'),
			'footer_menu' => __('Footer Menu', 'text-domain'),
			'mobile_footer-menu' => __('Mobile Footer Menu', 'text-domain')
			);

		register_nav_menus( $locations );
	}

	add_action('init', 'spoorxi_nav_menus');

	// de sidebars 

	function sidebar_leftColumn() {

		$args = ( array( 
			'name'			=> 'linkerColumn',
			'id'			=> 'left_column',
			'description'		=> 'De linker colom op de homepage',
			'before_widget'	=> '<div class="columns">',
			'after_widget'		=> "</div>",
			'before_title'		=> '<h3 class="column_title">',
			'after_title'		=> "</h3>"
			)	
		);

		register_sidebar( $args	);
						
	}

	function sidebar_middleColumn() {

		$args = ( array( 
			'name'			=> 'middelColumn',
			'id'			=> 'middle_column',
			'description'		=> 'De middelste colom op de homepage',
			'before_widget'	=> '<div class="columns">',
			'after_widget'		=> "</div>",
			'before_title'		=> '<h3 class="column_title">',
			'after_title'		=> "</h3>"
			)	
		);

		register_sidebar( $args	);
						
	}

	function sidebar_rightColumn() {

		$args = ( array( 
			'name'			=> 'rechterColumn',
			'id'			=> 'right_column',
			'description'		=> 'De rechter colom op de homepage',
			'before_widget'	=> '<div class="columns">',
			'after_widget'		=> "</div>",
			'before_title'		=> '<h3 class="column_title">',
			'after_title'		=> "</h3>"
			)	
		);

		register_sidebar( $args );
						
	}

	function sidebar_page() {

		$args = ( array( 
			'name'			=> 'Pagina',
			'id'			=> 'page_bar',
			'description'		=> 'De sidebar op pagina\'s',
			'before_widget'	=> '<div class="sidebar_page">',
			'after_widget'		=> "</div>",
			'before_title'		=> '<h3 class="sidebar_title ribbon">',
			'after_title'		=> "</h3>"
			)	
		);

		register_sidebar( $args );
						
	}

	add_action('widgets_init', 'sidebar_leftColumn');
	add_action('widgets_init', 'sidebar_middleColumn');
	add_action('widgets_init', 'sidebar_rightColumn');
	add_action('widgets_init', 'sidebar_page');



?>