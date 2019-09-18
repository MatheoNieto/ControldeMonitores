<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
class Registrarmonitor_model extends CI_Model {  
     
    
    
    public function __construct(){
        parent::__construct();        
        $this->db_siabuc=$this->load->database('dbsiabuc', TRUE);
    }
 
     
   public function datosusers($codigo){     

       $this->db_siabuc->select(' usuarios.no_cuenta as codigo,usuarios.nombre as nombresapellidos,usuarios.correo as correo,usuarios.domicilio as dirrecion,usuarios.colonia as barrio,usuarios.ciudad_estado as ciudad,usuarios.telefono as telefono,usuarios.foto as foto,carreras.nombre as carrera');
       
        $this->db_siabuc->from('catalogos.usuarios as usuarios');
       
        $this->db_siabuc->join('catalogos.carreras as carreras ','carreras.idcarrera=usuarios.idcarrera ');
        $this->db_siabuc->where('usuarios.no_cuenta',$codigo);
    
        $resultados= $this->db_siabuc->get();      

        if($resultados->num_rows()>0){          
            return $resultados->result();
        }else{
            return false;         
        } 
       
    } 
    
        public function programsa(){        
        $resultado= $this->db->get('programas');
        return $resultado->result();
    }  
        public function dependeckn(){
        $resultado= $this->db->get('dependecia_monitores');
        return $resultado->result();
    }  
        public function tiposmoni(){
        $resultado= $this->db->get('tipomonitor');
        return $resultado->result();
    }  
    
    
    
    public function regismoni($datos){
        $this->db->insert('monitores',$datos);
      
         if ($this->db->affected_rows() > 0){
          return true;
      }else{
          return false;
      } 
    }
    public function registrauser($datos){
        $this->db->insert('usuarios',$datos);
      
         if ($this->db->affected_rows() > 0){
          return true;
      }else{
          return false;
      } 
    }
    
}
