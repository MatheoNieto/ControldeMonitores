<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultaymodificar extends CI_Controller {
   public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
       $this->load->model('consultaymodificacion_model');
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
                $datosu['monitores'] = $this->consultaymodificacion_model->allmonitores();
                $datosu['typymoni'] = $this->consultaymodificacion_model->tipomonitorias();
                $datosu['usuarios'] = $this->consultaymodificacion_model->datosuser($sesion);
                $this->load->view('consultademonitorias',$datosu);
                $this->load->view('contenido/contenedorConsultam2',$datosu);
                $this->load->view('contenido/contenedorConsultam4',$datosu);
            }
        }else{
            redirect('login');
        }
	}

    public function consultaxmonitor(){

        $codigomoni= $this->input->post('nombrem');
        $fecharange = $this->input->post('config-demo');
        $tipom = $this->input->post('tipom');

        $fechadr = explode(" - ",$fecharange);
        $fecha1 = $fechadr[0];
        $fecha2 = $fechadr[1];     
            $datosu['csntual'] = $this->consultaymodificacion_model->consultarmonitrias($codigomoni,$fecha1,$fecha2,$tipom);
            $datosu['dbitacora'] = $this->consultaymodificacion_model->bistacora($codigomoni,$fecha1,$fecha2,$tipom);
            $datosu['cantsugere'] = $this->consultaymodificacion_model->countsuger($codigomoni,$tipom);
            $datosu['datosxm'] = $this->consultaymodificacion_model->datosuser($codigomoni); 
            $this->load->view('contenido/contenedorConsultam1',$datosu);
            $this->load->view('contenido/contenedorConsultam2',$datosu);
            $this->load->view('contenido/contenedorConsultam3',$datosu); 
    }


     public function insertarmonitoria(){
        $sesion = $this->session->userdata('codigo');
        $codigo = $this->input->post('txtcodenove');
        $horini = $this->input->post('horaini');
        $horafini = $this->input->post('horadini');
        $fecharegis = $this->input->post('fechaif');
        $tipom = $this->input->post('slctpmonirianove');
        $descrip = $this->input->post('txtdescripnove');
        $descrip= trim($descrip);
        $fechainic = $fecharegis." ".$horini;
        $fechafinic = $fecharegis." ".$horafini;
        $ip = getenv('REMOTE_ADDR');
        $navegador = getenv('HTTP_USER_AGENT');
        $infodndini = 'ip:'.$ip.' Informacion pc:'.$navegador;
        if($fechai<=$fechaf ){
            $sesion = array(
            'id' => NULL,
            'codigo_monitor' => $codigo,
            'fechainicio' => $fechainic,
            'fechafin' => $fechafinic,
            'descripcion' => $descrip,
            'usario_inicio' => $sesion,
            'ip_inicio' => $infodndini,
            'usuario_fin' => $sesion,
            'ipdefinsesion' => $infodndini,
            'tipomonitoria' => $tipom,

        );

        if ($this->consultaymodificacion_model->insertarsesion($sesion)== true){
          echo "true";
        }else{
         echo 'false';
        }

      }else{
         echo "dfasdf";
        }

    }
    public function modifimonitoria(){
      $sesion = $this->session->userdata('codigo');
      $id=$this->input->post('txtid');
      $horaini = $this->input->post('horainiciomod');
      $horafin = $this->input->post('horafinmodi');
      $fecha = $this->input->post('fechaifmodi');
      $fechaini = $fecha.' '.$horaini;      
      $fechafinal = $fecha.' '.$horafin;
      $tipom = $this->input->post('slctpmoniriamodif');
      $descrip = $this->input->post('txtdescripmodif');
      $descrip = trim($descrip);
      $ip = getenv('REMOTE_ADDR');
      $navegador = getenv('HTTP_USER_AGENT');
      $infodndini = 'ip:'.$ip.' Informacion pc:'.$navegador;
        if($fechai<=$fechaf ){
            $sesion = array(
            'fechainicio' => $fechaini,
            'fechafin' => $fechafinal,
            'descripcion' => $descrip,
            'usario_inicio' => $sesion,
            'ip_inicio' => $infodndini,
            'usuario_fin' => $sesion,
            'ipdefinsesion' => $infodndini,
            'tipomonitoria' => $tipom,

        );

       $this->consultaymodificacion_model->modificarsession($sesion,$id);
    }
    }

    public function noaplicar(){
        $id = $this->input->post('id');
        $monitoria = array(
            'surge' => NULL,
            );
        $this->consultaymodificacion_model->modificarsession($monitoria,$id);

    }
    public function yesapplicuar(){
        $id = $this->input->post('id');
        $accion = $this->input->post('accion');
        $fechaini =$this->input->post('fechaini');
        $fechafinal =$this->input->post('fechafin');
        $descrip =$this->input->post('descrpcion');
        $tipom =$this->input->post('tipomonitoria');


        $sesion = $this->session->userdata('codigo');
        $ip = getenv('REMOTE_ADDR');
        $navegador = getenv('HTTP_USER_AGENT');
        $infodndini = 'ip:'.$ip.' Informacion pc:'.$navegador;
      
        switch ($accion) {
            case 1:
                $this->consultaymodificacion_model->elimarregistro($id);
                break;
            case 2:
            $monitoria = array(
                'usario_inicio' => $sesion,
                'ip_inicio' => $infodndini,
                'usuario_fin' => $sesion,
                'ipdefinsesion' => $infodndini,
                'surge' => NULL,
                );
            $this->consultaymodificacion_model->modificarsession($monitoria,$id);
                break;
            case 3:
                 $monitoria = array(
                    'fechainicio' => $fechaini,
                    'fechafin' => $fechafinal,
                    'descripcion' => $descrip,
                    'usario_inicio' => $sesion,
                    'ip_inicio' => $infodndini,
                    'usuario_fin' => $sesion,
                    'ipdefinsesion' => $infodndini,
                    'tipomonitoria' => $tipom,
                    'surge' => NULL,
                    );
                $this->consultaymodificacion_model->modificarsession($monitoria,$id);
                break;
                
        }
 

    }
    public function eliminarregistro(){
        $id = $this->input->post('id');
        $this->consultaymodificacion_model->elimarregistro($id);

    }

}
