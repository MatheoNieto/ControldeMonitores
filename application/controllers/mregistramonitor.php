<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mregistramonitor extends CI_Controller {

       
    public function __construct(){
        parent::__construct();
        
        $this->load->model('login_model');
        $this->load->model('registrarmonitor_model');        
            
        
    }	
	public function index(){
                
        if($this->session->userdata('tipou')){
        $session_id = $this->session->userdata('tipou');
        if ($session_id == 1){
            redirect('menumonitores');
        }else if ($session_id == 2){
            redirect('administrativo');
        }else{
            $this->load->view('mregistramonitor');
            $this->load->view('contenido/contenedorregistram2');
        }
        }else{
            redirect('login');
        } 
  
		
	}
    
    public function consultarmonitor(){

        $codigo = $this->input->post('txtcodigo');        
        if($this->registrarmonitor_model->datosusers($codigo) != false){
            $datosu['dependencias'] = $this->registrarmonitor_model->dependeckn(); 
            $datosu['programas'] = $this->registrarmonitor_model->programsa(); 
            $datosu['tipomoni'] = $this->registrarmonitor_model->tiposmoni(); 
            $datosu['usuarioc'] = $this->registrarmonitor_model->datosusers($codigo); 
            $this->load->view('contenido/contenedorregistram1',$datosu);
        }else{
            return false;
        }
    }
    
    public function registrarmonitor(){
       
        $codigo = $this->input->post('txtcodigo2');               
        $nombresape = $this->input->post('txtnombre');        
        $apellisdo = $this->input->post('txtapellidos');        
        $tel = $this->input->post('txttelefono');        
        $email = $this->input->post('txtemail');        
        $usuario = $this->input->post('txtusuario');        
        $direccion = $this->input->post('txtdirec');        
        $barrio = $this->input->post('txtbarrio');        
        $ciudad = $this->input->post('txtciudad');        
        $tipomontior = $this->input->post('txttopm');        
        $carrera = $this->input->post('txtcarrera');        
        $semestre = $this->input->post('txtsemestre');
        $dependaencia = $this->input->post('txtdependencia');
        $areasfuerte = $this->input->post('materiasb');
        $contrasena = trim($codigo);
        $password = md5($contrasena);    

        
        $monitor = array(
            'codigo' => $codigo,
            'nombres' => $nombresape,
            'apellidos' => $apellisdo,
            'correo' => $email,           
            'tel' => $tel,           
            'direccion' => $direccion,
            'barrio' => $barrio,
            'ciudad' => $ciudad,
            'carrera' => $carrera,
            'semestre' => $semestre,
            'areasesorias' => $areasfuerte,
            'imgperfil' => 'documento.png',
            'dependencia' => $dependaencia,
            'tipo_monitor' => $tipomontior,
            'horario' => 0,
            'horaasignadas' =>NULL
        );


        $usaruio = array(
            'codigo1'=>$codigo,
            'codigo2'=> null,
            'usuario'=>$usuario,
            'password'=>$password,
            'tipo_usuario'=>1
        );
        
         if ($this->registrarmonitor_model->regismoni($monitor)== true){
            $this->registrarmonitor_model->registrauser($usaruio);
        }else{
         return 'false';   
        }
    }
    
   
}
