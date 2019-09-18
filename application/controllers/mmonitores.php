<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmonitores extends CI_Controller {

  public function __construct(){
  parent::__construct();

   $this->load->model('monitoresr_model');

    }

	public function index(){
  if($this->session->userdata('tipou')){
      $session_id = $this->session->userdata('tipou');
      if ($session_id == 1){
        redirect('menumonitores');
      }else if ($session_id == 2){
        redirect('administrativo');
      }else{
        $datosu['usuarios'] = $this->monitoresr_model->datosusers();
        $this->load->view('mmonitor',$datosu);
        $this->load->view('contenido/contenedormmonitores2',$datosu);
      }
  }else{
      redirect('login');
  }

	}

    public function datosmoni(){

  $codigo= $this->input->post('id');
  $datosu['dependencias'] = $this->monitoresr_model->dependeckn(); 
  $datosu['programas'] = $this->monitoresr_model->programsa(); 
  $datosu['tipomoni'] = $this->monitoresr_model->tiposmoni(); 
  $datosu['monit'] = $this->monitoresr_model->datomoni($codigo);
  $this->load->view('contenido/contenedormmonitores1',$datosu);
    }

  public function modificardatos(){

    $codigoviejo =  $this->input->post('txtcodigoviejho');
    $codigo =  $this->input->post('txtcodigoactu');
    $nombres = $this->input->post('txtnbombreacut');
    $apellidos = $this->input->post('textapealisod');
    $tel = $this->input->post('txtytelactu');
    $email = $this->input->post('txtcorroactu');
    $direccion = $this->input->post('txtdireccionactu');
    $barrio = $this->input->post('txtbarrioactu');
    $ciudad = $this->input->post('txtciaudadactu');

    $carrera = $this->input->post('txtcarrera');
    $semestre = $this->input->post('txtsemestre');
    $tipomonitor = $this->input->post('txttopm');
    $areasf = $this->input->post('materiasb');    
    $dependecia = $this->input->post('txtdependencia');
    $horasignas = $this->input->post('txthoraasignadas');



  

    $monitor = array(
    'codigo'=> $codigo,
    'nombres' => $nombres,
    'apellidos' => $apellidos,
    'correo' => $email,
    'tel' => $tel,
    'direccion' => $direccion,
    'barrio' => $barrio,
    'ciudad' => $ciudad,
    'carrera' => $carrera,
    'semestre' => $semestre,
    'areasesorias' => $areasf,
    'dependencia' => $dependecia,
    'tipo_monitor' => $tipomonitor,
    'horaasignadas'=> $horasignas
    );

    $this->monitoresr_model->actualizarinfor($monitor,$codigoviejo);

  }
}
