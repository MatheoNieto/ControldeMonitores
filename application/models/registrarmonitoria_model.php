<?php

class Registrarmonitoria_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    
    
    
    public function datosuser($codigo){
        $this->db->select('*');
        $this->db->where('usuario',$codigo);
        $resultado= $this->db->get('usuarios_admin');
        return $resultado->result();
    }
    
  public function insertarsesion($datos){
      $this->db->insert('horasmonitorias',$datos);
      
         if ($this->db->affected_rows() > 0){
          return true;
      }else{
          return false;
      } 
  }
    
    
}