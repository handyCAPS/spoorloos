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
		switch ($post_name) {

			case 'ict-lab' :
				get_sidebar( 'ictlab' );
				break;
			default : get_sidebar( 'deelnemers' );
		}
		?>

	</div><!--  end mainContent  -->

	<?php get_footer(); ?>