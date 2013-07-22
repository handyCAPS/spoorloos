<div id="sidebarPageWrap">
		<?php 
		
		function spoorXI_sidebar_switch() {
			global $post;
			$post_name = strtolower(get_the_title($post));
			$post_parent = strtolower(get_the_title( $post->post_parent ));
			switch ($post_name) {
				case 'deelnemers':
					return dynamic_sidebar('page_bar_deelnemers');
					break;
				case 'zorgverleners':
					return dynamic_sidebar('page_bar_zorgverleners');
					break;
				case 'aan de slag':
					return dynamic_sidebar('page_bar_aandeslag');
					break;
				case 'ict-lab':
					return dynamic_sidebar('page_bar_ictlab');
					break;
				case 'kinderboerderij':
					return dynamic_sidebar('page_bar_kinderboerderij');
					break;
				default:
						switch ($post_parent) {
							case 'deelnemers':
								return dynamic_sidebar('page_bar_deelnemers');
								break;
							case 'zorgverleners':
								return dynamic_sidebar('page_bar_zorgverleners');
								break;
							case 'aan de slag':
								return dynamic_sidebar('page_bar_aandeslag');
								break;
							case 'ict-lab':
								return dynamic_sidebar('page_bar_ictlab');
								break;
							case 'kinderboerderij':
								return dynamic_sidebar('page_bar_kinderboerderij');
								break;
							default: 
								return dynamic_sidebar('page_bar');
						}
		 	} 
		}
		spoorXI_sidebar_switch();
		?>
</div>