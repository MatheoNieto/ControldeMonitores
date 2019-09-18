<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menumonitores extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('principalmonitores_model');


    }

    public function index(){

    if($this->session->userdata('tipou')){
        $session_id = $this->session->userdata('tipou');
      if ($session_id == 1){
        $sesion = $this->session->userdata('codigo');
        $datosu['usuarios'] = $this->principalmonitores_model->datosuser($sesion);
        $this->load->view('pmonitores/paginamonitor',$datosu);
      }else if ($session_id == 2){
        redirect('administrativo');
      }else{
       redirect('menuprincipal');
      }
    }else{
      redirect('login');
    }

	}
}
