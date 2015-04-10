$(document).on("ready", function(){

	$("#login_button").click(openforminiciosession);
});

function openforminiciosession(){	
	

	url = $(".now").val()+"index.php/sessioncontroller/iniciosessionuser";
	redirect(url);	
}

