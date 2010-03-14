$(document).ready(function(){
	
	//If submit has been pressed
	$("#form-login").submit(function(){
		var allOk = true;
		
		//Remove all warnings
		$("input[type='text']").each(function(){
			$(this).removeClass("j_error");
		});
		//Set warnings if needed
		$("input[type='text']").each(function(){
			if($(this).val().length<1){
				allOk = false;
				$(this).addClass("j_error");
			}
		});
		
		if(!allOk) return false;
	});
});