<?php
	
	if( have_rows('gallery_item') ):

		echo '<div id="work">';
				
		while ( have_rows('gallery_item') ) : the_row();
				        
			echo '<div class="work_wrapper"><a href="';
			
			the_sub_field('url');
			
			echo '" target="_blank"><div class="work_item" style="background-image: url(';
				        
			the_sub_field('image');
			
			echo ');"><div class="filter"><span class="text"><i class="fas fa-expand-arrows-alt"></i>';
			
			the_sub_field('title');
			
			echo '</span></div></div></a></div>';
				
		endwhile;
		
		echo '</div>';
					
	else :
				
	endif;
		
?>