<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct(){        
        parent::__construct();            
        $this->load->library('sessionclass');
    }     


   

	function index(){

		if ( $this->sessionclass->is_logged_in() == true) {

			redirect(base_url('index.php/sessioncontroller/presentacion/'));

		}else{					
			$data['titulo']='';
			

					
				
				/*
				
				$this->load->view('Template/header_home', $data);
				$this->load->view('home', $data);
				$this->load->view('Template/footer', $data);	
				*/

				
				$this->load->view('TemplateFEX/header', $data);
				$this->load->view('fexhome/index.php', $data);
				$this->load->view('TemplateFEX/footer', $data);
				

			$this->session->sess_destroy();		
		}

	}/*Termina index*/




	function signup(){

			if ( $this->sessionclass->is_logged_in() == true) {

				redirect(base_url('index.php/sessioncontroller/presentacion/'));
			}else{


				/*
				$data['titulo']='Registrar cuenta ahora';
				$this->load->view('TemplateFEX/headerwithoutsessionwhithe', $data);
				$this->load->view('user/usergeneralsignup', $data);
				$this->load->view('TemplateFEX/footer', $data);	
				*/	

				$data['titulo']='Registrar cuenta ahora';
				$this->load->view('Template/header_white', $data);								
				$this->load->view('user/usergeneralsignup', $data);
				$this->load->view('Template/footerwhite', $data);			

				
				/*	
				$data['titulo']='Registrar cuenta ahora';
				$this->load->view('Template/header_white', $data);
				$this->load->view('user/usergeneralsignup', $data);
				$this->load->view('Template/footerwhite', $data);	
				*/
			}				
		

	}
	
	function logout(){
	
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */