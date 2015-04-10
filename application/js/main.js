$(document).on("ready" , function(){

	now = $(".now").val();
});
function outsystem(){
	urlnext = $(".now").val()+"index.php/sessioncontroller/logout/";		
	redirect(urlnext);	
}
function llenaelementoHTML(idelement , data){

	$(idelement).html(data);
} 
function valorHTML(idelement , data){

	$(idelement).val(data);
} 
function redirect(url){
	window.location.replace(url);
}
function recorrepage(idrecorrer){
	
      $('html,body').animate({
        scrollTop: $(idrecorrer).offset().top
    }, 200);
}



