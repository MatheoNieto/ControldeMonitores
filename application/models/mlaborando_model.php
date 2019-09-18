<?php 
class Mlaborando_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }


    public function noclose(){  
        $sql = 'SELECT * FROM monitorias INNER JOIN monitores ON monitorias.codigo_monitor = monitores.codigo WHERE monitorias.fechafin IS null';
        $resultado = $this->db->query($sql);  
         if($resultado->num_rows()>0){          
            return $resultado->result();
        }else{
            return false;         
        }
        
    }

}