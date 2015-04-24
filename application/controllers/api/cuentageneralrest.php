<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Cuentageneralrest extends REST_Controller{
      
    function __construct(){
            parent::__construct();
            

            $this->load->model('cuentageneralmodel');
            
            $this->load->library('sessionclass');
            
        }         
	function index(){}        

    /*******************************Regresa el número de integrantes de la cuenta ***********************/
     function getnumintegrantescuenta_GET(){
           
        if ( $this->sessionclass->is_logged_in() == 1) {  

            /*Capturamos datos*/
    
            

            $this->response($this->getnumerointegrantesbyidusuario());
                   
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }    

    }/*Termina función */



/*Consultamos el número de integrantes en la cuenta por id del usuario */


    function getnumerointegrantesbyidusuario(){

       $iduser  = $this->sessionclass->getidusuario();
       $numerointegrantes  = $this->cuentageneralmodel->getintegrantesbyidusuario($iduser);
       return $numerointegrantes;
       //return $iduser;

    }/*Termina la función*/


/*************************************************************************************************************/
    
    function getintegrantesinfocuenta_GET(){

        if ( $this->sessionclass->is_logged_in() == 1) {  

            /*Capturamos datos*/
    
            

            $this->response($this->getintegrantesinformacion());
                   
            /*Cuando no hay session*/
        }else{
            $this->sessionclass->logout();
        
        }   
            

    }/*Termina la cuenta */





    function getintegrantesinformacion(){

         $iduser  = $this->sessionclass->getidusuario();
         $integrantes  = $this->cuentageneralmodel->getintegrantesinforme($iduser);
         return $integrantes;
    }

/*************************************************************************************************************/
 




	/*Termina rest*/
}

