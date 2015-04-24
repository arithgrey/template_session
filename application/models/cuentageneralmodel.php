<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class cuentageneralmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }
    /*Asigna el perfil del usuario */



function getintegrantesbyidusuario($iduser){

    $idempresa =  $this->getidempresabyidusuario($iduser);

    $queryuserbycuenta ="SELECT count(*) AS usuariosregistrados  FROM usuario WHERE  idempresa = $idempresa "; 
    $result = $this->db->query( $queryuserbycuenta);

    $registrados = 1; 

    /*Inicia el ciclo para ver el numero de usuarios registrados*/
     foreach ($result ->result_array() as $row) {
   
          $registrados  =  $row["usuariosregistrados"];
    }/*Termina el ciclo*/

    return $registrados;
}/*Termina la función */





/**/

function getintegrantesinforme($iduser){

    $idempresa =  $this->getidempresabyidusuario($iduser);



    $querygetinfointegrantes ="SELECT u.nombre , u.email ,u.fecha_registro , p.nombreperfil 
    FROM usuario as u , perfil as p , usuario_perfil as up WHERE  u.idusuario = up.idusuario AND
       p.idperfil = up.idperfil AND u.idempresa = $idempresa ";

    $resultquery = $this->db->query($querygetinfointegrantes);
    return  $resultquery->result_array();
}



/*regresa el id de la empresa a la cual pertenece un usuario */
function getidempresabyidusuario($iduser){


  $querygetidempresa   ="SELECT idempresa FROM usuario WHERE idusuario = $iduser "; 
  $result = $this->db->query($querygetidempresa); 

  $idempresa = 0;

  foreach ($result ->result_array() as $row) {
   
     $idempresa =  $row["idempresa"];
  }

  return $idempresa;
}
/*Termina la función*/



/*Termina modelo */
}



