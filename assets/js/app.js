$(document).ready(function() {
	$('.confirm-btn').on('click', function() {
		var res = confirm('Confirm action?');
		
		if(res == true) {
			return true;
		} else {
			return false;
		}
	});
	
	$('.date').datepicker({
		changeMonth: true,
		changeYear: true
	});
});