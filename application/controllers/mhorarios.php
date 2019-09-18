<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhorarios extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('horario_model');
    }

	public function index(){
        if($this->session->userdata('tipou')){
            $session_id = $this->session->userdata('tipou');
            if ($session_id == 1){
                redirect('menumonitores');
            }else if ($session_id == 2){
                redirect('administrativo');
            }else{
                $sesion = $this->session->userdata('codigo'); 

                $datosu['themonday'] = $this->horario_model->lunes();
                $datosu['thetuesday'] = $this->horario_model->martes();
                $datosu['thewednesday'] = $this->horario_model->miercoles();
                $datosu['thethuersday'] = $this->horario_model->jueves();
                $datosu['thefriday'] = $this->horario_model->viernes();
                $datosu['thesaturday'] = $this->horario_model->sabado();

                $datosu['loslunes'] = $this->horario_model->losdellunes();
                $datosu['losmartes'] = $this->horario_model->losdelmartes();
                $datosu['losmiercoes'] = $this->horario_model->losdelmiercoles();
                $datosu['losjueves'] = $this->horario_model->losdeljueves();
                $datosu['losviernes'] = $this->horario_model->losdelviernes();
                $datosu['lossabados'] = $this->horario_model->losdelsabado();

                $this->load->view('mhorario',$datosu);
            }
        }else{
            redirect('login');
        }
    }

    public function regisr(){

        $codigomoni= $this->input->post('txtcode');
        $hourstart = $this->input->post('slecthoraini');
        $hourend = $this->input->post('slecthorafin');
        $placework = $this->input->post('slectltrab');
        $theday = $this->input->post('thasday');
        $descripcion = $this->input->post('descripcion');
        $descripcion = trim($descripcion);

        $sesion = array(
            'code_monitor' => $codigomoni,
            'horainicio' => $hourstart,
            'horafin' => $hourend,
            'lugartrabajo' => $placework,
            'id' => NUll,
            'comentarios'=>$descripcion
        );
        $this->horario_model->registerthesh($sesion,$theday);

    }

    public function modifcarr(){

        $eldidi= $this->input->post('thesid');
        $hourstart = $this->input->post('slecthorainihr');
        $hourend = $this->input->post('slecthorafinhr');
        $placework = $this->input->post('slectltrabhr');
        $theday = $this->input->post('thasdayhr');
        $descripcion = $this->input->post('descripcionhr');
        $descripcion = trim($descripcion);

        $sesion = array(
            'horainicio' => $hourstart,
            'horafin' => $hourend,
            'lugartrabajo' => $placework,
            'comentarios'=>$descripcion
        );
        $this->horario_model->modif($sesion,$eldidi,$theday);

    }

    public function eliminar(){

        $eldia= $this->input->post('eldia');
        $idid = $this->input->post('id');
        $this->horario_model->deletes($eldia,$idid);
    }


}
