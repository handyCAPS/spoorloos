<?php
/*
Template Name: Slider
*/
?>
<?php get_header('slider'); ?>
		</header>
	<div id="mainContent">
		<div id="pageWrap" class="<?php strtolower(the_title()); ?>">
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

		<?php get_sidebar('ictlab'); ?>

	</div><!--  end mainContent  -->

	<?php get_footer('slider'); ?>