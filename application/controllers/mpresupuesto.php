<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpresupuesto extends CI_Controller {

       
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('ppresupeusto_model');        
        
    }
	
	public function index(){
         $sesion = $this->session->userdata('usuario');       
        if($sesion){   
           
                 $this->load->view('modulopresupuesto');            
        }else{
            redirect('login'); 
        }
		
	} 
    
   
}
