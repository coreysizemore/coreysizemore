<?php
	
	if( have_rows('medical_columns') ):

		echo '<div id="medical_wrapper"><div class="container"><div class="row gutters">';
				
		while ( have_rows('medical_columns') ) : the_row();
				        
			echo '<div class="col_3"><div class="medical_column">';
			
			
			
			$link = get_sub_field('demo_link');
			
			
			
			echo '<h3>' . get_sub_field('title') . '</h3>';
			
			echo '<p>' . get_sub_field('description') . '</p>';
			
			if (!empty($link)):
			
				echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
			
			endif;
			
			echo '</div></div>';
				
		endwhile;
		
		echo '</div></div></div>';
					
	else :
				
	endif;
	
	if( have_rows('website_features') ):
		
		echo '<div id="med_feature_wrapper"><div class="med_feature_row"><div class="container"><div class="row gutters"><div class="col_12"><div class="content">';
				
		while ( have_rows('website_features') ) : the_row();
		
			echo '<div class="med_feature_item">';
		
			echo '<i class="' . get_sub_field('icon') . '"></i>';
			
			echo '<h3>' . get_sub_field('title') . '</h3>';
			
			echo '<p>' . get_sub_field('description') . '</p>';
			
			echo '</div>';
				
		endwhile;
		
		echo '</div></div></div></div></div></div>';
					
	else :
				
	endif;
	
	if( have_rows('medical_rows') ):

		echo '<div id="medical_wrapper_2">';
				
		while ( have_rows('medical_rows') ) : the_row();
				        
			echo '<div class="medical_row"><div class="container"><div class="row gutters"><div class="col_12"><div class="medical_row_content">';
			
			echo '<h3>' . get_sub_field('title') . '</h3>';
			
			echo get_sub_field('content');
			
			echo '</div></div></div></div></div>';
				
		endwhile;
		
		echo '</div>';
					
	else :
				
	endif;
		
?>