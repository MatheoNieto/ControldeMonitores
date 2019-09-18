<?php
 
class Login_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function login($codigo,$password){
        $this->db->where('usuarios.password ="'.$password.'" AND usuarios.usuario = "'.$codigo.'"');
        $this->db->or_where('usuarios.password ="'.$password.'" AND usuarios.codigo1 = "'.$codigo.'"');
       $this->db->or_where('usuarios.password ="'.$password.'" AND usuarios.codigo2 = "'.$codigo.'"');
       $resultado= $this->db->get('usuarios');
       if($resultado->num_rows()>0){
           return TRUE;
       }else{
           return false;
       }

    }

    public function tipou($codigo,$password){

        $this->db->where('usuarios.password ="'.$password.'" AND usuarios.usuario = "'.$codigo.'"');
        $this->db->or_where('usuarios.password ="'.$password.'" AND usuarios.codigo1 = "'.$codigo.'"');
       $this->db->or_where('usuarios.password ="'.$password.'" AND usuarios.codigo2 = "'.$codigo.'"');
       $resuser= $this->db->get('usuarios');
        return $resuser->result_array();

    }
}