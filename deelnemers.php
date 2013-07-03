<?php 
/*
Template Name: Deelnemers
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

			case 'ict-lab' :
				get_sidebar( 'ictlab' );
				break;
			case 'kinderboerderij' :
				get_sidebar( 'kinderboerderij' );
				break;
			case 'aan de slag' :
				get_sidebar( 'aandeslag' );
				break;
		    default:
	    		switch ($post_parent) {

				case 'ict-lab' :
					get_sidebar( 'ictlab' );
					break;
				case 'kinderboerderij' :
					get_sidebar( 'kinderboerderij' );
					break;
				case 'aan de slag' :
					get_sidebar( 'aandeslag' );
					break;

				default : get_sidebar( 'deelnemers' );
			}
		}
		?>

	</div><!--  end mainContent  -->

	<?php get_footer(); ?>