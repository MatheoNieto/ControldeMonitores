<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mreporte extends CI_Controller {
   public function __construct(){
        parent::__construct();
       $this->load->model('mreportes_model');
            
    }

    public function index(){
        
        if($this->session->userdata('tipou')){
        $session_id = $this->session->userdata('tipou');
        if ($session_id == 1){
        redirect('menumonitores');
        }else if ($session_id == 2){
        redirect('administrativo');
        }else{
        $this->load->view('reportes');
        $this->load->view('contenido/contenedorreportes2');
        }
        }else{
        redirect('login');
        }
		
	} 
    
    
    public function consultar(){
        
     $fecharange = $this->input->post('config-demo2');
     $tipom = $this->input->post('tipom');
    
        $fechadr = explode(" - ",$fecharange);
        $fecha1 = $fechadr[0]; 
        $fecha2 = $fechadr[1]; 
                 
        if ($tipom == 1){
            
             
       $datosu['datosxm'] = $this->mreportes_model->datosp($fecha1,$fecha2);
        
        
        $this->load->view('contenido/contenedorreportes1',$datosu);

        
        
         
        } 
        
      
        
        
    }
    
    
    
    
    
}