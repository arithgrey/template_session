<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class usuariogeneralmodel extends CI_Model {

    function __construct()
    {
        parent::__construct();        
        $this->load->database();
    }

    /*Validamos existencia del usuario */
    function validaexistuser($user , $mail ){

          $query = $this->db->query("SELECT * FROM usuario WHERE nombre='".$user."' OR  email='".$mail."' ");              
          $resultado = $query->result_array();

          if(count($resultado)>0){
            return count($resultado);  
          }else{
            return count($resultado);
          }                
    }
    /*Registra al usuario general*/    
    function recordusergeneral($usuario , $mail , $pw ,  $idempresaregistrada){
      
      $query_insert ="INSERT INTO usuario (nombre , email , password , idempresa  ) 
      VALUES ('". $usuario."' , '".$mail."' , '".$pw."' , '".$idempresaregistrada."')"; 
      $resultado = $this->db->query($query_insert);       
      return $resultado;

    }

    function validauserrecord($mail , $secret){

        $query_select ="SELECT * FROM usuario WHERE email = '".$mail."' AND password ='".$secret."' ";
        $result_user = $this->db->query($query_select);       
        return $result_user ->result_array();      
    }


    /*Verificamos si existe la base de datos */
    /*Asigna el perfil del usuario */




    /*Termina el modelo*/
}



