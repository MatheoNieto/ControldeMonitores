<?php

class Datospersonalesxmonitor_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }    
    
     
    public function datosuser($codigo){
        $this->db->select('*');
        $this->db->where('codigo',$codigo);
        $resultado= $this->db->get('monitores');
       return $resultado->result();
    } 
    
     public function cambiarcontra($datos,$codigo){
       $this->db->set('password',$datos);
        $this->db->where('codigo1',$codigo);
        $this->db->update('usuarios');
    }
    
    
}