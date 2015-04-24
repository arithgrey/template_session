$(document).on("ready", function(){
	

	$("#numerointegrantes").ready(loadnumintegrantes);

});


/*Cargamos los integrantes regostrados en la cuenta */


function loadnumintegrantes(){


		var clienteresponse = ["Falla al cargar el número de integrantes"];

		URL = now + "index.php/api/cuentageneralrest/getnumintegrantescuenta/format/json/"; 


		$.get(URL).done(function(data){
			
			llenaelementoHTML("#numerointegrantes" ,  data);
		}).fail(function(){

			llenaelementoHTML("#numerointegrantes" ,  clienteresponse[0]);

		});
		/*Termina AJAX*/

}
/*Termina la función */
