<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Menuadministrativo extends CI_Controller {
 
      
    public function __construct(){
        parent::__construct();
         $this->load->model('login_model');
        $this->load->model('principal_model');
       
    }

    public function index(){           
       if($this->session->userdata('tipou')){
        $session_id = $this->session->userdata('tipou');
        if ($session_id == 1){
        redirect('menumonitores'); 
        }else if ($session_id == 2){
             $sesion = $this->session->userdata('codigo');
        $datosu['usuarios'] = $this->principal_model->datosuser($sesion);
        $this->load->view('adminitrativo/paginaprincipal',$datosu); 
        }else{
        redirect('admin');
        }
        }else{
          redirect('login');
        } 
        
    } 
}
