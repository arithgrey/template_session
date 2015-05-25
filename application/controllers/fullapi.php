<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once('application/libraries/api_twitter/twitteroauth.php');  

class Fullapi  extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('sessionclass');    
	}
	

	function index(){
		if ( $this->sessionclass->is_logged_in() == 1) {			


			$data['titulo']='Métricas';
			$data['titulo_sistema']='Métricas';
			$data['nombreadministrador'] = $this->sessionclass->getnombre();
			

			$menu = $this->sessionclass->generadinamymenu();			
			$data["menu"] = $menu;
			$nombre = $this->sessionclass->getnombre();
			$data["nombre"]= $nombre;

			
			$twitter  = new TwitterOAuth( "U6rB8oJinXjy7ag7T0fuf60t8", 
			"WDpN7x0c1UCo7RPWD8cZEhqZt5aKUdGrjQA48iTCUEgj9AOhH7" ,
			"1351264166-2SXRyl00YDtM8Me7RnpHDnq5EPj5VDM07uZYXap", 
			"h1yXnn05VMt3xFyp7biXSVWSgX2C0yzBEwohyWGrpJ1Dp"); 

		
			$credenciales  = $twitter->get('account/verify_credentials'); 
			//print_r($credenciales);        
        	//$twitterstatus = $twitter->post('statuses/update', array('status' => "test") );     

			

			
			$this->load->view('tw', $data);
			

    	}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}			



	}/*Termina la función*/

	
		
}/*Termina el controlador */
