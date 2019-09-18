<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pmonitorbitacora extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('bitacora_model');

    }

    public function index(){

    if($this->session->userdata('tipou')){
        $session_id = $this->session->userdata('tipou');
      if ($session_id == 1){
        $sesion = $this->session->userdata('codigo');
        $datosu['typymoni'] = $this->bitacora_model->tipomonitorias();
        $this->load->view('pmonitores/labitacora',$datosu);
        $this->load->view('pmonitores/contenido/contenidobitacora2',$datosu);
      }else if ($session_id == 2){
        redirect('administrativo');
      }else{
       redirect('menuprincipal');
      }
    }else{
      redirect('login');
    }

  }

  public function insertarmonitoria(){
    $sesion = $this->session->userdata('codigo');
    $tipomonitoria = $this->input->post('slctpmonirianove');
    $horaini = $this->input->post('horaini');
    $horafini = $this->input->post('horadini');
    $fecha = $this->input->post('fechaif');
    $dsecripcion = $this->input->post('txtdescripnove');
    $dsecripcion = trim($dsecripcion);
    $fechainicio = $fecha." ".$horaini;
    $fechafinn = $fecha." ".$horafini;
        $monitoria = array(
            'id' => null,
            'codigo_monitor'=>$sesion,
            'fechainicio'=>$fechainicio,
            'fechafin'=>$fechafinn,
            'descripcion'=>$dsecripcion,            
            'usario_inicio'=>'42072926',
            'ip_inicio'=>null,
            'usuario_fin'=>'42072926',
            'ipdefinsesion'=>null,
            'tipomonitoria'=>$tipomonitoria,
            'surge'=>"R"
        );
        if($this->bitacora_model->inimoitoria($monitoria)){
          return true;
        }else{
          echo false;
        }
}

  
  public function modifimonitoria(){

    $sesion = $this->session->userdata('codigo');
    $ididmonit = $this->input->post('txtidid');
    $id=$this->input->post('txtid');
    $idmonitoria=$this->input->post('txtid');
    $horaini = $this->input->post('horainiciomod');
    $horafin = $this->input->post('horafinmodi');
    $fecha = $this->input->post('fechaifmodi');
    $fechaini = $fecha.' '.$horaini;
    $fechafinal = $fecha.' '.$horafin;
    $tipom = $this->input->post('slctpmoniriamodif');
    $descrip = $this->input->post('txtdescripmodif');
    $descrip = trim($descrip);
    if($fechai<=$fechaf ){
       $monitoria = array(
          'surge' => 'M',
       );
       $sesionn = array(
         'fechainicio' =>$fechaini,
         'descriocion' =>$descrip,
         'fechafin' =>$fechafinal,
         'tipomonitoria' =>$tipom
        );

     $this->bitacora_model->modificarsession($monitoria,$ididmonit);
     $this->bitacora_model->modificarbitacora($sesionn,$id);
  }else{
    $monitoria = array(
    'surge' => 'M',
    );

    $sesionn = array(
    'fechainicio' =>$fechafinal ,
    'descriocion' =>$descrip,
    'fechafin' =>$fechaini,
    'tipomonitoria' =>$tipom
    );

    $this->bitacora_model->modificarsession($monitoria,$ididmonit);
    $this->bitacora_model->modificarbitacora($sesionn,$id);
  }
  }

  public function eliminarregistro(){
    $id = $this->input->post('id');
    $ididmonit = $this->input->post('idwmin');
    $monitoria = array(
      'surge' => 'E',
   );
   $this->bitacora_model->modificarsession($monitoria,$ididmonit);
    $this->bitacora_model->elimarregistro($id);

}
  public function consultbuta(){
    $sesion = $this->session->userdata('codigo');
    $fecharange = $this->input->post('config-demo');
    $tipom = $this->input->post('slecttipmconsu');

    $fechadr = explode(" - ",$fecharange);
    $fecha1 = $fechadr[0];
    $fecha2 = $fechadr[1];

    $datosu['dtbitacora'] = $this->bitacora_model->fitrandoxalgo($sesion,$fecha1,$fecha2,$tipom);
    $this->load->view('pmonitores/contenido/contenidobitacora1',$datosu);
}
  public function listtable(){
    $sesion = $this->session->userdata('codigo');
    $fecharange = $this->input->post('fecha');
    $tipom = $this->input->post('tipom');

    $fechadr = explode(" - ",$fecharange);
    $fecha1 = $fechadr[0];
    $fecha2 = $fechadr[1];

    $datosu['dtbitacora'] = $this->bitacora_model->fitrandoxalgo($sesion,$fecha1,$fecha2,$tipom);
    $this->load->view('pmonitores/contenido/contenidobitacora1',$datosu);
}


}
