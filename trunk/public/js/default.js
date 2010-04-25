$(document).ready(function(){
	
	//If submit has been pressed
	$("#form-login").submit(function(){
		var allOk = true;
		
		//Remove all warnings
		$("input[type='text']").each(function(){
			$(this).removeClass("j_error");
		});
		$("input[type='password']").each(function(){
			$(this).removeClass("j_error");
		});
		//Set warnings if needed
		$("input[type='text']").each(function(){
			if($(this).val().length<1){
				allOk = false;
				$(this).addClass("j_error");
			}
		});
		$("input[type='password']").each(function(){
			if($(this).val().length<1){
				allOk = false;
				$(this).addClass("j_error");
			}
		});
		
		if(!allOk) return false;
	});
	
	/* Remove 0 */
	$("input[id^='value-']").click(function(){
		$(this).val('');
	});
	
	/* Add to basket */
	$("input[type='button']").click(function(){
		var id = $(this).attr('id');
		id = id.substring(4, id.length);
		var productId = id;
		var val = $("#value-"+id).val();
		
		if(val>0){
			$.post(	$('#url').val()+'user/basket/ajax-set-basket/',
					{id: productId, num: val},
					function(data){
						$("#value-"+productId).val('0');
						$("#show-"+productId).fadeIn(500).fadeOut(3000);
					}
			);
		}
	});
	
});

/**
 * Slide up and down
 * @param id
 * @return
 */
function showHide(id){
	var div = "#div-"+id;
	$(div).toggle();
}