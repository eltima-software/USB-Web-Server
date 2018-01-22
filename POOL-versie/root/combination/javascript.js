$(function(){
	$(".table tr").click(function(event){
		if($(this).find("td:first input").is(':checked')){
			$(this).css("backgroundColor","");
			if (event.target.type !== 'checkbox') {
				$(this).find("td:first input").attr("checked",false);
			}
		}
		else{
			$(this).css("backgroundColor","#BFDD8C");
			if (event.target.type !== 'checkbox') {
				$(this).find("td:first input").attr("checked",true);
			}
		}
	});
});