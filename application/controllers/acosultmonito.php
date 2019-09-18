<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acosultmonito extends CI_Controller {


    public function __construct(){
  parent::__construct();
   $this->load->model('acontulmonior_model');

    }

    public function index(){           
        if($this->session->userdata('tipou')){
         $session_id = $this->session->userdata('tipou');
         if ($session_id == 1){
         redirect('menumonitores'); 
         }else if ($session_id == 2){
            $sesion = $this->session->userdata('codigo');
            $prueba['areap'] = $this->acontulmonior_model->departament($sesion);
            if($prueba['areap'][0]['deparatamento'] != null){
                $datosu['monitores'] = $this->acontulmonior_model->monitores($prueba['areap'][0]['deparatamento']);
            }
            $this->load->view('adminitrativo/monitores',$datosu); 
         }else{
         redirect('admin');
         }
         }else{
           redirect('login');
         } 
         
     } 
}
