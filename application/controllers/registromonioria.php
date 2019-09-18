<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registromonioria extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('registrarmonitoria_model');
        
        
    }

	public function index(){        
		
         $sesion = $this->session->userdata('usuario');        
       
        if($sesion){  
          
                 $datouser['datosadmin'] = $this->registrarmonitoria_model->datosuser($sesion);
                 $this->load->view('registrarsesion',$datouser);
        
           
            
    }else{
            redirect('login'); 
        }
	}
    
    
    public function insertarmonitoria(){
        
      $codigo = $this->input->post('txtcodigo');
      $horai = $this->input->post('horainicio');
      $horaf = $this->input->post('horafin');
      $fecha = $this->input->post('fechaif');
      $fechai = $fecha." ".$horai;
      $fechaf = $fecha." ".$horaf;
      $area = $this->input->post('lugartrabajo');
      $tipom = $this->input->post('tipomonitoria');
      $descrip = $this->input->post('txtdescripcion');
      $quien = $this->input->post('userr');
      $tipomonitor = $this->input->post('monipract');
      
      
        if($tipom == 2 ){
            
            $sesionn = array(
            'id' => NULL,
            'fechainicio' => $fechai,
            'fechafin' => $fechaf,
            'descripcion' => $descrip,           
            'lugart' => $area,           
            'tipom' => $tipom,
            'codigom' => $codigo,
            'por' => $quien,
            'precio' => $tipomonitor
        );
         
      
        
      }else{
            $sesionn = array(
            'id' => NULL,
            'fechainicio' => $fechai,
            'fechafin' => $fechaf,
            'descripcion' => $descrip,           
            'lugart' => $area,           
            'tipom' => $tipom,
            'codigom' => $codigo,
            'por' => $quien,
            'precio' => 3
        );
           
        }    
          if ($this->registrarmonitoria_model->insertarsesion($sesionn)== true){
          echo "true";
        }else{
         echo "false";   
        }
    }   
    
    
}
