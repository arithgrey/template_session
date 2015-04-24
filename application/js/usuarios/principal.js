$(document).on("ready" , function(){

	$("#listausuariosempresa").ready(loaduserscuenta);
});


/*Cargamos info de las personas que se encuentra en la cuenta */
function loaduserscuenta(){

	url = now + "index.php/api/cuentageneralrest/getintegrantesinfocuenta/format/json";

	var clientresponse = ["Error al cargar los colaboradores, reporte al administrador"]

	$.get(url ).done(function( data ){

		list="";

		for(var x in data){


			nombre = data[x].nombre;
			email = data[x].email;
			fecha_registro  = data[x].fecha_registro;
			nombreperfil = data[x].nombreperfil;

			list +="<tr>";
			list+="<td class='center'></td>";
			list+="<td>"+nombre+"</td>";	
			list+="<td>"+email+"</td>";
			list+="<td>"+fecha_registro+"</td>";
			list+="<td>"+nombreperfil+"</td>";
			list+="<td></td>";
			list+="</tr>";

		}

		llenaelementoHTML( "#listausuariosempresa", list );
	}).fail(function(){

		llenaelementoHTML( "#listausuariosempresa", clientresponse[0]);
	});




}/*Termina la funcion */