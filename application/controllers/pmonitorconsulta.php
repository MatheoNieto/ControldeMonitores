<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pmonitorconsulta extends CI_Controller {
 
     
    public function __construct(){
        parent::__construct();
        $this->load->model('principalmonitores_model');        
        
    }
   
    public function index(){      
          
          $sesion = $this->session->userdata('codigo');        
               
        if($sesion){  
          
                 $this->load->view('pmonitores/consultadehora');              
                $this->load->view('pmonitores/contenido/contenidoconsulta2');
                                
            }else{
            redirect('loginmonitores'); 
        }
		
	}    
    
   
    public function consulta(){
        
    $codigomoni = $this->session->userdata('codigo'); 
     $fecharange = $this->input->post('config-demo2');
     $tipom = $this->input->post('tipom');
    
        $fechadr = explode(" - ",$fecharange);
        $fecha1 = $fechadr[0]; 
        $fecha2 = $fechadr[1]; 
                 
           
       $datosu['datosxm'] = $this->principalmonitores_model->datosp($codigomoni,$fecha1,$fecha2,$tipom);
        
        
        $this->load->view('pmonitores/contenido/contenidoconsulta1',$datosu);
    }
      
     
}