<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pmonitordatosp extends CI_Controller { 
     
    public function __construct(){
        parent::__construct();
        $this->load->model('datospersonalesxmonitor_model');

        
    }
    public function index(){

        if($this->session->userdata('tipou')){
            $session_id = $this->session->userdata('tipou');
          if ($session_id == 1){
            $sesion = $this->session->userdata('codigo');
            $datosu['datosmios'] = $this->datospersonalesxmonitor_model->datosuser($sesion);
            $this->load->view('pmonitores/datospersonales',$datosu);
    
          }else if ($session_id == 2){
            redirect('administrativo');
          }else{
           redirect('menuprincipal');
          }
        }else{
          redirect('login');
        }
    
      }

   
    
    public function cambiarcontrasena(){
       $sesion = $this->session->userdata('codigo');
       $passwordd = $this->input->post('txtcontraacutlizar');
       $passwordd = $passwordd."*/+&^";
        $contrasena = md5($passwordd); 
        $datos = array(
            'password' => $contrasena,
            
        );
        $this->datospersonalesxmonitor_model->cambiarcontra($datos,$sesion);
    }
}