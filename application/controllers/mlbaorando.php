<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlbaorando extends CI_Controller {
   public function __construct(){
        parent::__construct();
       $this->load->model('mlaborando_model');
            
    }

    public function index(){        
        if($this->session->userdata('tipou')){
        $session_id = $this->session->userdata('tipou');
        if ($session_id == 1){
        redirect('menumonitores');
        }else if ($session_id == 2){
        redirect('administrativo');
        }else{
        if(!$datosu['sinfinal'] = $this->mlaborando_model->noclose()){
            $datosu['sinfinal'] = false;
            $this->load->view('actalmentmonitorias',$datosu);
        }else{
            $datosu['sinfinal'] = $this->mlaborando_model->noclose();
            $this->load->view('actalmentmonitorias',$datosu);
        }
                
        }
        }else{
        redirect('login');
        }
		
	} 
    
     
      
        
        
    }
    