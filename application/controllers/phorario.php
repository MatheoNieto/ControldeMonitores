<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phorario extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('phorario_model');

    }

    public function index(){

    if($this->session->userdata('tipou')){
        $session_id = $this->session->userdata('tipou');
      if ($session_id == 1){
        $sesion = $this->session->userdata('codigo');
        $datosu['typemonitoria'] = $this->phorario_model->tipomonitorias();
          $datosu['dtamonitor'] = $this->phorario_model->dtso($sesion);
          $datosu['dtahorario'] = $this->phorario_model->datosdelhorario($sesion);

          $datosu['loslunes'] = $this->phorario_model->losdellunes($sesion);
          $datosu['losmartes'] = $this->phorario_model->losdelmartes($sesion);
          $datosu['losmiercoes'] = $this->phorario_model->losdelmiercoles($sesion);
          $datosu['losjueves'] = $this->phorario_model->losdeljueves($sesion);
          $datosu['losviernes'] = $this->phorario_model->losdelviernes($sesion);
          $datosu['lossabados'] = $this->phorario_model->losdelsabado($sesion);
        $this->load->view('pmonitores/horario',$datosu);

      }else if ($session_id == 2){
        redirect('administrativo');
      }else{
       redirect('menuprincipal');
      }
    }else{
      redirect('login');
    }

  }
  public function registrarhorario(){
    $session = $this->session->userdata('codigo');
    //lunes
    $hinil = $this->input->post('horainil');
    $hifnal = $this->input->post('horafl');
    $tmonil = $this->input->post('tmonil');
    //martes
    $hourstmart = $this->input->post('horainimart');
    $hourendmart = $this->input->post('horafmart');
    $tmonimart = $this->input->post('tmonimart');
    //miercoles
    $hourstmier = $this->input->post('horainimier');
    $hourendmier = $this->input->post('horafmier');
    $tmonimier = $this->input->post('tmonimier');
    //jueves
    $hourstjuve = $this->input->post('horainijuev');
    $hourendjuve = $this->input->post('horafjueve');
    $tmonijueve = $this->input->post('tmonijuev');
    //viernes
    $hourstvier = $this->input->post('horainivier');
    $hourendvier = $this->input->post('horafvier');
    $tmonivier = $this->input->post('tmonivier');
    //sabado
    $hourstsab = $this->input->post('horainisab');
    $hourendsab = $this->input->post('horafsab');
    $tmonisab = $this->input->post('tmonisab');

        $sesion = array(
        'lunes' => $hinil.'-'.$hifnal.'-'.$tmonil,
        'martes' => $hourstmart.'-'.$hourendmart.'-'.$tmonimart,
        'miercoles' => $hourstmier.'-'.$hourendmier.'-'.$tmonimier,
        'jueves' => $hourstjuve.'-'.$hourendjuve.'-'.$tmonijueve,
        'viernes' => $hourstvier.'-'.$hourendvier.'-'.$tmonivier,
        'sabado' => $hourstsab.'-'.$hourendsab.'-'.$tmonisab,
        'cod_monitor' => $session,
        'statuslun'=>0,
        'statusmar'=>0,
        'statusmier'=>0,
        'statusjueves'=>0,
        'statusvier'=>0,
        'statussabado'=>0
    );

    $monit = array(
      'horario' => 1
    );

    if ($this->phorario_model->insertarsesion($sesion)== true){
      $this->phorario_model->modifica($monit,$session);
      return true;
    }else{
     echo 'false';
    }


}
 


}
