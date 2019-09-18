<?php

class Iniciossessios_model extends CI_Model {
    public function __construct(){
        parent::__construct();
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