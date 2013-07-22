<div id="sidebarPageWrap">
	<?php  
		$post_name = strtolower(get_the_title($post));
		$post_parent = strtolower(get_the_title( $post->post_parent ));
		switch ($post_name) {
			case 'deelnemers':
				echo "dynamic_sidebar('page_bar_deelnemers');";
				break;
			case 'zorgverleners':
				echo "dynamic_sidebar('page_bar_zorgverleners');";
				break;
			case 'aan de slag':
				echo "dynamic_sidebar('page_bar_aandeslag');";
				break;
			case 'ictlab':
				echo "dynamic_sidebar('page_bar_ictlab');";
				break;
			case 'kinderboerderij':
				echo "dynamic_sidebar('page_bar_kinderboerderij');";
				break;
			default:
					switch ($post_parent) {
						case 'deelnemers':
							echo "dynamic_sidebar('page_bar_deelnemers');";
							break;
						case 'zorgverleners':
							echo "dynamic_sidebar('page_bar_zorgverleners');";
							break;
						case 'aan de slag':
							echo "dynamic_sidebar('page_bar_aandeslag');";
							break;
						case 'ictlab':
							echo "dynamic_sidebar('page_bar_ictlab');";
							break;
						case 'kinderboerderij':
							echo "dynamic_sidebar('page_bar_kinderboerderij');";
							break;
						default: 
							echo "dynamic_sidebar('page_bar');";
						}
		}
	  ?>
</div>