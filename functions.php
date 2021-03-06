<?php 

	define('SPOORWEG', get_stylesheet_directory_uri());

	// Hier worden de stylesheets en scripts geladen

	function spoorxi_styles() {
		// wp_register_style( 'normalize', SPOORWEG . '/stylesheets/normalize.css', 'all' );
		wp_register_style( 'print', SPOORWEG . '/stylesheets/print.css', 'print' );
		wp_register_style( 'screen', SPOORWEG . '/stylesheets/screen.css', 'screen' );
		wp_register_style( 'google_fonts', 'http://fonts.googleapis.com/css?family=Open+Sans|Noto+Serif|Permanent+Marker', 'all' );
		wp_register_style( 'font_awesome', SPOORWEG . '/fonts/font-awesome/css/font-awesome.min.css', 'all' );

		wp_enqueue_style( 'google_fonts' );
		wp_enqueue_style( 'font_awesome' );
		// wp_enqueue_style( 'normalize' );
		wp_enqueue_style( 'print' );
		wp_enqueue_style( 'screen' );
	}

	add_action( 'wp_enqueue_scripts', 'spoorxi_styles' );

	function spoorxi_scripts() {
		wp_register_script( 'jquerylocal', SPOORWEG . '/js/jquery.min.js', array(),'1.10', true );
		wp_register_script( 'jqueryui', SPOORWEG . '/js/jquery.ui.js', array(), '1.10.3', true );
		wp_register_script( 'pin', SPOORWEG . '/js/jquery.sticky-sidebar.js', array(), false, true );
		wp_register_script( 'scrollto', SPOORWEG . '/js/scrollTo.js', array(), false, true );
		wp_register_script( 'localscroll', SPOORWEG . '/js/localScroll.js', array(), false, true );
		wp_register_script( 'spoorinit', SPOORWEG . '/js/spoorInit.js', array(), false, true );

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
			'mobile_header-menu' => __('Mobile Header Menu', 'text-domain'),
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
			'before_title'		=> '<a href="deelnemers"><h3 class="column_title">',
			'after_title'		=> "</h3></a>"
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
			'before_title'		=> '<a href="opdrachtgevers"><h3 class="column_title">',
			'after_title'		=> "</h3></a>"
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
			'before_title'		=> '<a href="zorgverleners"><h3 class="column_title">',
			'after_title'		=> "</h3></a>"
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
			'before_title'		=> '<h3 class="sidebar_title ribbon"><span class="ribbon-content">',
			'after_title'		=> "</span></h3>"
			)	
		);

		register_sidebar( $args );
						
	}

	function sidebar_page_deelnemers() {

		$args = ( array( 
			'name'			=> 'Deelnemers',
			'id'			=> 'page_bar_deelnemers',
			'description'		=> 'De sidebar op deelnemers pagina',
			'before_widget'	=> '<div class="sidebar_page">',
			'after_widget'		=> "</div>",
			'before_title'		=> '<h3 class="sidebar_title ribbon"><span class="ribbon-content">',
			'after_title'		=> "</span></h3>"
			)	
		);

		register_sidebar( $args );
						
	}

	function sidebar_page_ictlab() {

		$args = ( array( 
			'name'			=> 'ICT-Lab',
			'id'			=> 'page_bar_ictlab',
			'description'		=> 'De sidebar op ictlab paginas',
			'before_widget'	=> '<div class="sidebar_page">',
			'after_widget'		=> "</div>",
			'before_title'		=> '<h3 class="sidebar_title ribbon"><span class="ribbon-content">',
			'after_title'		=> "</span></h3>"
			)	
		);

		register_sidebar( $args );
						
	}

	function sidebar_page_kinderboerderij() {

		$args = ( array( 
			'name'			=> 'Kinderboerderij',
			'id'			=> 'page_bar_kinderboerderij',
			'description'		=> 'De sidebar op kinderboerderij paginas',
			'before_widget'	=> '<div class="sidebar_page">',
			'after_widget'		=> "</div>",
			'before_title'		=> '<h3 class="sidebar_title ribbon"><span class="ribbon-content">',
			'after_title'		=> "</span></h3>"
			)	
		);

		register_sidebar( $args );
						
	}

	function sidebar_page_aandeslag() {

		$args = ( array( 
			'name'			=> 'Aan De Slag',
			'id'			=> 'page_bar_aandeslag',
			'description'		=> 'De sidebar op Aan De Slag paginas',
			'before_widget'	=> '<div class="sidebar_page">',
			'after_widget'		=> "</div>",
			'before_title'		=> '<h3 class="sidebar_title ribbon"><span class="ribbon-content">',
			'after_title'		=> "</span></h3>"
			)	
		);

		register_sidebar( $args );
						
	}

	function sidebar_page_zorgverleners() {

		$args = ( array( 
			'name'			=> 'Zorgverleners',
			'id'			=> 'page_bar_zorgverleners',
			'description'		=> 'De sidebar op zorgverleners paginas',
			'before_widget'	=> '<div class="sidebar_page">',
			'after_widget'		=> "</div>",
			'before_title'		=> '<h3 class="sidebar_title ribbon"><span class="ribbon-content">',
			'after_title'		=> "</span></h3>"
			)	
		);

		register_sidebar( $args );
						
	}

	// function sidebar_page_intake_en_trajectplan() {

	// 	$args = ( array( 
	// 		'name'			=> 'Intake en trajectplan',
	// 		'id'			=> 'page_bar_intake_en_trajectplan',
	// 		'description'		=> 'De sidebar op intake en trajectplan paginas',
	// 		'before_widget'	=> '<div class="sidebar_page">',
	// 		'after_widget'		=> "</div>",
	// 		'before_title'		=> '<h3 class="sidebar_title ribbon"><span class="ribbon-content">',
	// 		'after_title'		=> "</span></h3>"
	// 		)	
	// 	);

	// 	register_sidebar( $args );
						
	// }

	// function sidebar_page_arbeidsvaardigheden() {

	// 	$args = ( array( 
	// 		'name'			=> 'Arbeidsvaardigheden',
	// 		'id'			=> 'page_bar_arbeidsvaardigheden',
	// 		'description'		=> 'De sidebar op arbeidsvaardigheden paginas',
	// 		'before_widget'	=> '<div class="sidebar_page">',
	// 		'after_widget'		=> "</div>",
	// 		'before_title'		=> '<h3 class="sidebar_title ribbon"><span class="ribbon-content">',
	// 		'after_title'		=> "</span></h3>"
	// 		)	
	// 	);

	// 	register_sidebar( $args );
						
	// }

	// function sidebar_page_trajectbegeleiding() {

	// 	$args = ( array( 
	// 		'name'			=> 'Trajectbegeleiding',
	// 		'id'			=> 'page_bar_trajectbegeleiding',
	// 		'description'		=> 'De sidebar op trajectbegeleiding paginas',
	// 		'before_widget'	=> '<div class="sidebar_page">',
	// 		'after_widget'		=> "</div>",
	// 		'before_title'		=> '<h3 class="sidebar_title ribbon"><span class="ribbon-content">',
	// 		'after_title'		=> "</span></h3>"
	// 		)	
	// 	);

	// 	register_sidebar( $args );
						
	// }

	// function sidebar_page_nazorg() {

	// 	$args = ( array( 
	// 		'name'			=> 'Nazorg',
	// 		'id'			=> 'page_bar_nazorg',
	// 		'description'		=> 'De sidebar op nazorg paginas',
	// 		'before_widget'	=> '<div class="sidebar_page">',
	// 		'after_widget'		=> "</div>",
	// 		'before_title'		=> '<h3 class="sidebar_title ribbon"><span class="ribbon-content">',
	// 		'after_title'		=> "</span></h3>"
	// 		)	
	// 	);

	// 	register_sidebar( $args );
						
	// }

	add_action('widgets_init', 'sidebar_leftColumn');
	add_action('widgets_init', 'sidebar_middleColumn');
	add_action('widgets_init', 'sidebar_rightColumn');
	add_action('widgets_init', 'sidebar_page');
	add_action('widgets_init', 'sidebar_page_deelnemers');
	add_action('widgets_init', 'sidebar_page_ictlab');
	add_action('widgets_init', 'sidebar_page_kinderboerderij');
	add_action('widgets_init', 'sidebar_page_aandeslag');
	add_action('widgets_init', 'sidebar_page_zorgverleners');
	// add_action('widgets_init', 'sidebar_page_intake_en_trajectplan');
	// add_action('widgets_init', 'sidebar_page_arbeidsvaardigheden');
	// add_action('widgets_init', 'sidebar_page_trajectbegeleiding');
	// add_action('widgets_init', 'sidebar_page_nazorg');

	remove_filter ('the_content',  'wpautop');


	// Experimental area
	function spoorXI_sidebars() {
		$sxi_sidebars = array(
			'deelnemers',
			'zorgverleners',
			'opdrachtgevers',
			'contact',
			'aandeslag',
			'kinderboerderij',
			'ict-lab'
		 );

		foreach ($sidebar as $sxi_sidebars) {
			return 
				(function sidebar_page_deelnemers() {
				
									$args = ( array( 
									'name'			=> ucfirst($sidebar),
									'id'			=> 'page_bar_' . $sidebar,
									'description'		=> 'De sidebar op '. $sidebar . ' pagina',
									'before_widget'	=> '<div class="sidebar_page">',
									'after_widget'		=> "</div>",
									'before_title'		=> '<h3 class="sidebar_title ribbon"><span class="ribbon-content">',
									'after_title'		=> "</span></h3>"
									)	
									);
				
									register_sidebar( $args );
								});
						
		}
	}
}

?>