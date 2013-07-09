<?php 
/*
Template Name: Zorgverleners
*/
?>

<?php get_header(); ?>
		</header>
	<div id="mainContent">
		<div id="pageWrap">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<h2> <?php the_title(); ?> </h2>
				
				<p class="entry-content">
					<?php
						the_content();
					?>
				</p>
				
				<?php edit_post_link(); ?>
					
			<?php endwhile; else: ?>
			<p>Geen posts gevonden ...</p>
			<?php endif; ?>
		</div><!--  end pageWrap  -->

		<?php 
		$post_name = strtolower(get_the_title($post));
		$post_parent = strtolower(get_the_title( $post->post_parent ));
		switch ($post_name) {

			// case 'intake en trajectplan' :
			// 	get_sidebar( 'intake-en-trajectplan' );
			// 	break;
			// case 'arbeidsvaardigheden' :
			// 	get_sidebar( 'arbeidsvaardigheden' );
			// 	break;
			// case 'trajectbegeleiding' :
			// 	get_sidebar( 'trajectbegeleiding' );
			// 	break;
			// case 'nazorg' : 
			// 	get_sidebar( 'nazorg' );
			// 	break;
		    default:
	    		switch ($post_parent) {

				// case 'intake en trajectplan' :
				// 	get_sidebar( 'intake-en-trajectplan' );
				// 	break;
				// case 'arbeidsvaardigheden' :
				// 	get_sidebar( 'arbeidsvaardigheden' );
				// 	break;
				// case 'trajectbegeleiding' :
				// 	get_sidebar( 'trajectbegeleiding' );
				// 	break;
				// case 'nazorg' : 
				// 	get_sidebar( 'nazorg' );
				// 	break;

				default : get_sidebar( 'zorgverleners' );
			}
		}
		?>

	</div><!--  end mainContent  -->

	<?php get_footer(); ?>