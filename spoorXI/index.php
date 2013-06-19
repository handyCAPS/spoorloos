<?php get_header(); ?>

<div id="firstContactWrap">
				<div id="firstContact">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<h2> <?php the_title(); ?> </h2>
						
						<p class="entry-content">
							<?php
								the_content();
							?>
						</p>
						
						<?php edit_post_link(); ?>
					
				</div><!--  end firstContact  -->

			<?php endwhile; else: ?>
			<p>Geen posts gevonden ...</p>
			<?php endif; ?>

				<a href="#"><div id="actionCall"><p>CONTACT</p></div></a><!--  end actionCall  -->
			</div><!--  end firstContactWrap  -->
			<div id="headerImageWrap">
				<div id="revealWrapAds" class="reveal_wrap_class">
					<div id="hiddenAds" class="revealOnHover">
						<h3>Aan De Slag</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris. Blabla bla blah. <span class="lees_meer"><a href="#">Lees meer ...</a></span>
						</p>
					</div><!--  end hiddenAds  -->
					<img src="<?php echo SPOORWEG ?>/images/aandeslag.jpg" alt="Aan De Slag Alphen a/d Rijn">
				</div><!--  end revealWrapAds  -->
				<div id="revealWrapKdb" class="reveal_wrap_class">
					<div id="hiddenKdb" class="revealOnHover">
						<h3>Kinderboerderij</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris. Blabla bla blah. <span class="lees_meer"><a href="#">Lees meer ...</a></span>
						</p>
					</div><!--  end hiddenKdb  -->
					<img src="<?php echo SPOORWEG ?>/images/kinderboerderij.jpg" alt="Kinderboerderij Boskoop">
				</div><!--  end revealWrapKdb  -->
				<div id="revealWrapIct" class="reveal_wrap_class">
					<div id="hiddenIct" class="revealOnHover">
						<h3>ICT-Lab</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris. Blabla bla blah. <span class="lees_meer"><a href="#">Lees meer ...</a></span>
						</p>
					</div><!--  end hiddenIct  -->
					<img src="<?php echo SPOORWEG ?>/images/ict-lab.jpg" alt="ICT-Lab Alphen a/d Rijn">
				</div><!--  end revealWrapIct  -->
			</div><!--  end headerImageWrap  -->
		</header>
	<div id="mainContent">
		<?php get_sidebar( 'frontpage' ); ?>
	</div><!--  end mainContact  -->

	<?php get_footer(); ?>