<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {
      
    public function __construct(){
        parent::__construct();
        // SE CARGA EL MODAL QUE SE VA A UTILIZAR, ESTOS SE ECUENTRAN EN LA CARPETA MODAL
         $this->load->model('login_model');
       
    }
    public function index(){           
       if($this->session->userdata('tipou')){
        $session_id = $this->session->userdata('tipou');
        if ($session_id == 1){
            redirect('menumonitores'); 
        }else if ($session_id == 2){
            redirect('menuadministrativo');
        }else{
            redirect('menuprincipal');
        }
        }else{
         
            $this->load->view('index');  
        }
                if(isset($_POST["password"])){
            $user = $_POST["codigo"];
            $contrasena = $_POST["password"];
            $password = md5($contrasena);
            
            if ($this->login_model->login($user,$password) == TRUE ){
                $prueba['tipo'] = $this->login_model->tipou($user,$password);                
                if($prueba['tipo'][0]['codigo1'] == null){
                    $variablesession = array(
                        'codigo'=>$prueba['tipo'][0]['codigo2'],
                        'tipou'=>$prueba['tipo'][0]['tipo_usuario']
                    );
                }else{
                    $variablesession = array(
                        'codigo'=>$prueba['tipo'][0]['codigo1'],
                        'tipou'=>$prueba['tipo'][0]['tipo_usuario']
                    );
                }             

                if($prueba['tipo'][0]['tipo_usuario'] == 1){
                    $this->session->set_userdata($variablesession);
                    redirect('menumonitores','refresh');

                }else if( $prueba['tipo'][0]['tipo_usuario'] == 2){
                    $this->session->set_userdata($variablesession);
                    redirect('menuadministrativo','refresh');

                }else if ( $prueba['tipo'][0]['tipo_usuario'] == 3){
                    $this->session->set_userdata($variablesession);
                    redirect('menuprincipal','refresh');
                }
            }else{                 
                echo "<script>alert('Usuario o contraseña incorrecta');</script>";
                redirect('login','refresh');
           
            }
        }else{
           
            $this->load->view('index');  
        }
        
    }  
          
      
    public function cerrarsession() {
         
    $this->session->sess_destroy();
    redirect('login');
        
    }
     
}
