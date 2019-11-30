$(document).ready(function(){
	var message = $('#error_add').val();
	
	if(message){
		$('#modal_add_user').modal('show');
	}

})