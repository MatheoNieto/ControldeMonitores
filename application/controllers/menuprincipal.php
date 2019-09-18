<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menuprincipal extends CI_Controller {
       
    public function __construct(){
        parent::__construct();
        $this->load->model('principal_model');

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
        $datosu['monitores'] = $this->principal_model->allmonitores();
        $datosu['typymoni'] = $this->principal_model->tipomonitorias();
        $datosu['usuarios'] = $this->principal_model->datosuser($sesion);
        $this->load->view('paginaprincipal',$datosu); 
        $this->load->view('contenido/contentmenuprincipal2',$datosu); 
        $this->load->view('contenido/contentmenuprincipal4',$datosu); 
        }
        }else{
        redirect('login');
        }
		
	}
    
    
    
    public function cambiaprecio(){
        $productosvend = $this->input->post('prdvendi'); 
        $json = json_decode($productosvend);
        foreach($json as $bla){
            $precio = $bla->precio;
            $id = $bla->id;

            $confi = array(        
                'precio' => $precio
            );           

            $this->principal_model->actualizarinforadmin($confi,$id);
        }

        
                   
           
        
        
        
          
    }   
  
    
    
    public function registrarmonitoria(){
        $sesion = $this->session->userdata('codigo');
        $codigomonitor = $this->input->post('codigomini');
        $tipomonitoria = $this->input->post('slctpmoniria');
        
        if ($this->principal_model->knowclosesn($codigomonitor)){
            function round_time($time, $round_to_minutes = 30, $type = 'auto') {
                $round = array( 'auto' => 'round', 'up' => 'ceil', 'down' => 'floor' );
                $round = @$round[ $type ] ? $round[ $type ] : 'round';
                $seconds = $round_to_minutes * 60;
                if(substr_count($time,":")==2){
                    return date( 'H:i:s', $round( strtotime( $time ) / $seconds ) * $seconds );
                }else{
                    return date( 'H:i', $round( strtotime( $time ) / $seconds ) * $seconds );
                }
            }
            date_default_timezone_set('America/Bogota');
            $fechaactual = date('Y-m-d');
            $horaactual = date('H:i'); 
            $horaredondea = round_time($horaactual,30);
            $fechalistoini = $fechaactual.' '.$horaredondea;
            $ip = getenv('REMOTE_ADDR');
            $navegador = getenv('HTTP_USER_AGENT');
            $infodndini = 'ip:'.$ip.' Informacion pc:'.$navegador;

            $monitoria = array(
                'id' => null,
                'codigo_monitor'=>$codigomonitor,
                'fechainicio'=>$fechalistoini,
                'fechafin'=>null,
                'descripcion'=>null,            
                'usario_inicio'=>$sesion,
                'ip_inicio'=>$infodndini,
                'usuario_fin'=>null,
                'ipdefinsesion'=>null,
                'tipomonitoria'=>$tipomonitoria,
                'surge'=>null
            );
            $this->principal_model->inimoitoria($monitoria);
               
        }else{
            echo false;
        }
    }
    
    
    public function actulizarlistafin(){
        
        if($datosu['sinfinal'] = $this->principal_model->noclose() != "false"){
            $datosu['sinfinal'] = $this->principal_model->noclose();
            $this->load->view('contenido/contentmenuprincipal1',$datosu); 
        }else{
            return false;
        }
        
        
    }  
    public function consulinic(){
        $codigo = $this->input->post('id');
        $datosu['datosinici'] = $this->principal_model->datsinici($codigo);
        $datosu['typymoni'] = $this->principal_model->tipomonitorias();
        $this->load->view('contenido/contentmenuprincipal3',$datosu);
    }
    public function finsession(){
        $sesion = $this->session->userdata('codigo');
        $idmonitoria = $this->input->post('id');
        $fechafin = $this->input->post('fechafinmonitoria');
        $typemonitoria = $this->input->post('tipodemonitoria');
        $descripcion = $this->input->post('descripcionmonitoria');
        $descripcion = trim($descripcion);
        $ip = getenv('REMOTE_ADDR');
        $navegador = getenv('HTTP_USER_AGENT');
        $ipfinpc = 'ip:'.$ip.' Informacion pc:'.$navegador;
            $monitoria = array(
                'fechafin'=>$fechafin,
                'descripcion'=>$descripcion,            
                'usuario_fin'=>$sesion,
                'ipdefinsesion'=>$ipfinpc,
                'tipomonitoria'=>$typemonitoria
            );        
        $this->principal_model->finmonitoria($monitoria,$idmonitoria);        
    }
    public function registronovd(){
        $sesion = $this->session->userdata('codigo');
        $codigomonitor = $this->input->post('txtcodenove');
        $tipomonitoria = $this->input->post('slctpmonirianove');
        $horaini = $this->input->post('fechininove');
        $horafini = $this->input->post('fechfinnove');
        $fecha = $this->input->post('fechaif');
        $dsecripcion = $this->input->post('txtdescripnove');
        $dsecripcion = trim($dsecripcion);
        $fechainicio = $fecha." ".$horaini;
        $fechafinn = $fecha." ".$horafini;
            $ip = getenv('REMOTE_ADDR');
            $navegador = getenv('HTTP_USER_AGENT');
            $infodndini = 'ip:'.$ip.' Informacion pc:'.$navegador;
            $monitoria = array(
                'id' => null,
                'codigo_monitor'=>$codigomonitor,
                'fechainicio'=>$fechainicio,
                'fechafin'=>$fechafinn,
                'descripcion'=>$dsecripcion,            
                'usario_inicio'=>$sesion,
                'ip_inicio'=>$infodndini,
                'usuario_fin'=>$sesion,
                'ipdefinsesion'=>$infodndini,
                'tipomonitoria'=>$tipomonitoria,
                'surge'=>null
            );
            $this->principal_model->inimoitoria($monitoria);
    }
    
    
    
    
   
}
