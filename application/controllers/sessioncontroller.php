<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once('generalcontroller.php');
class Sessioncontroller extends CI_Controller {

	function __construct(){        
        parent::__construct();            

        $this->load->library('sessionclass');        
    }         

    function iniciosessionuser(){

    	if ( $this->sessionclass->is_logged_in() == 1) {			

    		redirect(base_url('index.php/sessioncontroller/presentacion/'));

    	}else{

    		$data['titulo']='Sign In';


    		/*
    		$this->load->view('TemplateFEX/header', $data);								

			$this->load->view('user/signin', $data);
			$this->load->view('TemplateFEX/footer', $data);	
			*/
    		
    		
			$this->load->view('Template/header_white', $data);								
			$this->load->view('user/signin', $data);
			$this->load->view('Template/footerwhite', $data);	
			
    	}

    }


	function presentacion(){		
						
		
		/*Validamo session*/
		if( $this->sessionclass->is_logged_in() == 1){				
			
			$perfil = $this->sessionclass->getperfiles();
			$first =0;
			
				if (count($perfil)== 0 ) {
					$first =1;	
				}
				

					if ($first == 1 ) {			
						/*Si es la primera vez carga el view plan*/
						$data['titulo']='Bienvenido a Dawning dual ' . $this->sessionclass->getnombre();
						$idusuario = $this->sessionclass->getidusuario(); 
						$data["idusuario"] =$idusuario;




						$this->load->view('TemplateFEX/headersesion', $data);		
						$this->load->view('modalidad/userplan', $data);
						$this->load->view('TemplateFEX/footer', $data);	
						
						/*
						$this->load->view('Template/header_white', $data);								
						$this->load->view('modalidad/userplan', $data);
						$this->load->view('Template/footer', $data);	
						*/

					}else{				
						/*Cuando el usuario ya está registrados*/
						$this->usuarioregistrado();
					}
	
		}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}	
	}


	function usuarioregistrado(){

			if ( $this->sessionclass->is_logged_in() == 1) {			

				$data['titulo']='Bienvenido a Dawning Dual';
				$data['nombre']= $this->sessionclass->getnombre();

				$menu = $this->sessionclass->generadinamymenu();			
				$data["menu"] = $menu;
				$nombre = $this->sessionclass->getnombre();			
				$data["nombre"]= $nombre;
				

				/*
				$this->load->view('Template/header_template', $data);		
				$this->load->view('principal/bienvenidauser', $data);
				$this->load->view('Template/footer_template', $data);	
				*/



				$this->load->view('TemplateFEX/headersesion', $data);		
				$this->load->view('principal/bienvenidauser', $data);
				$this->load->view('TemplateFEX/footer', $data);	
				


			}else{
			/*Terminamos la session*/
			$this->sessionclass->logout();
		}	

	}

	function logout(){
			
		$this->session->sess_destroy();		
		$this->sessionclass->logout();
		
	}	

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */