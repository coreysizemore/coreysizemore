<?php
	
	if( have_rows('home_page') ):
		
		while ( have_rows('home_page') ) : the_row();
		
			$heading = get_sub_field('heading');
			$description = get_sub_field('description');
		
			echo '<div class="home_page_wrapper ' . get_sub_field('class') . '"><div class="container"><div class="row gutters"><div class="col_12"><div class="home_page_item">';
			
			echo '<h1>' . $heading . '</h1>';
			
			echo '<p>' . $description . '</p>';
			
			echo '</div></div>';
			
			echo '</div></div></div>';
				
		endwhile;
					
	else :
				
	endif;
			
?>