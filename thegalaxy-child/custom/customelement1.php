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
	
	if( have_rows('additional_services') ):

		echo '<div id="additional_services">';
		
		echo '<h1>Add-On Services</h1>';
				
		while ( have_rows('additional_services') ) : the_row();
				        
			echo '<div class="additional_services_item">';
			
			echo '<h2>' . get_sub_field('service_title') . '</h2>';
			
			echo '<div class="add_price"><span>$</span><span>' . get_sub_field('service_price') . '</span><span>' . get_sub_field('service_price_freq') . '</span></div>';
			
			echo '<p>' . get_sub_field('service_description') . '</p>';
			
			echo '</div>';
				
		endwhile;
		
		echo '</div>';
					
	else :
				
	endif;
		
?>