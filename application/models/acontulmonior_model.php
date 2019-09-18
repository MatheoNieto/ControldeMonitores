<?php
 
class Acontulmonior_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    
     public function departament($codigo){        
       $this->db->where('codigo',$codigo);
       $resuser= $this->db->get('administrativos');
        return $resuser->result_array();  
         
    }  
     public function monitores($dependencia){        
       $this->db->where('dependencia',$dependencia);
       $resultado= $this->db->get('monitores');
       return $resultado->result();

    }  
     
}