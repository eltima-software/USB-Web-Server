$(function(){
	$("#flag").click(function(){
		if($("#flags").is(":visible")){
			 $("#flags").hide('slide', {direction: 'right'}, 1000);
		}
		else{
			$("#flags").show('slide', {direction: 'right'}, 1000);
		}
	});
});