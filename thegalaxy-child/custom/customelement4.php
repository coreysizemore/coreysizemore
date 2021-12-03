<?php
	
	if( have_rows('subscriptions') ):
		
		while ( have_rows('subscriptions') ) : the_row();
		
			$sixsubcost = get_sub_field('six_month_subscription_cost');
			$twelvesubcost = get_sub_field('twelve_month_subscription_cost');
			$subheadone = get_sub_field('price_sub_heading_1');
			$subheadtwo = get_sub_field('price_sub_heading_2');
			$subscription = get_sub_field('subscription');
			$description = get_sub_field('description');
			$details = get_sub_field('details');
		
			echo '<div class="subscription_wrapper ' . get_sub_field('class') . '"><div class="container"><div class="row gutters"><div class="col_12"><div class="subscription">';
			
			echo '<h1>' . $subscription . '</h1>';
			
			echo '<p>' . $description . '</p>';
			
			echo '</div></div>';
			
			if( !empty($sixsubcost) ):
			
				echo'<div class="col_6"><div class="subscription">';
			
				echo '<span class="sublength sixmonth">' . $subheadone . '</span>';
				
				echo '<span class="cost"><span class="dollar">$</span>' . $sixsubcost . '</span>';
				
				echo '</div></div>';
				
			endif;
			
			if( !empty($twelvesubcost) ):
			
				echo '<div class="col_6"><div class="subscription">';
			
				echo '<span class="sublength twelvemonth">' . $subheadtwo . '</span>';
				
				echo '<span class="cost"><span class="dollar">$</span>' . $twelvesubcost . '</span>';
				
				echo '</div></div>';
				
			endif;
			
			if( !empty($details) ):
			
				echo '<div class="col_12"><div class="subscription details">';
				
				echo '<span class="details_button">See Details</span>';
				
				echo '<div class="details">' . $details .  '</div>';
				
				echo '</div></div>';
			
			endif;
			
			echo '</div></div></div>';
				
		endwhile;
					
	else :
				
	endif;
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
/*
	
	
	
	
	
	
	if( have_rows('medical_columns') ):

		echo '<div id="medical_wrapper">';
				
		while ( have_rows('medical_columns') ) : the_row();
				        
			echo '<div class="medical_column">';
			
			$image = get_sub_field('icon');
			
			$link = get_sub_field('demo_link');
			
			echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
			
			echo '<h3>' . get_sub_field('title') . '</h3>';
			
			echo '<p>' . get_sub_field('description') . '</p>';
			
			if (!empty($link)):
			
				echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '">' . $link['title'] . '</a>';
			
			endif;
			
			echo '</div>';
				
		endwhile;
		
		echo '</div>';
					
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
				        
			echo '<div class="medical_row"><div class="container"><div class="row gutters"><div class="col_12"><div class="content">';
			
			echo '<h3>' . get_sub_field('title') . '</h3>';
			
			echo get_sub_field('content');
			
			echo '</div></div></div></div></div>';
				
		endwhile;
		
		echo '</div>';
					
	else :
				
	endif;
*/
		
?>