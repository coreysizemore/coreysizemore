$(document).ready(function() {

	if ($('.subscription_wrapper').length > 0) {
		
		$( ".subscription.details .details" ).hide();
		
		$( ".details_button" ).click(function() {
			
			$(this).siblings( ".details" ).slideToggle();
			
		});
		
	}
	
});