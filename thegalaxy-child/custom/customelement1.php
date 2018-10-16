<?php

	if( have_rows('pricing') ):

		echo '<div id="pricing">';
				
		while ( have_rows('pricing') ) : the_row();
				        
			echo '<div class="pricing_item">';
			
			the_sub_field('description');
			
			echo '</div>';
				
		endwhile;
		
		echo '</div>';
					
	else :
				
	endif;
		
?>