<?php
 
class Monitoresr_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
      
   public function datosusers(){
    $this->db->select('monitores.codigo, monitores.nombres,monitores.apellidos,monitores.correo,monitores.correo,monitores.tel,monitores.direccion,monitores.barrio,monitores.ciudad,programas.nombre as programas,monitores.semestre,monitores.areasesorias,monitores.imgperfil,dependecia_monitores.nombre as dependencia,tipomonitor.nombre as tpomonitor,monitores.horaasignadas');
    $this->db->from('monitores');
    $this->db->join('programas','monitores.carrera = programas.id');
    $this->db->join('dependecia_monitores','monitores.dependencia = dependecia_monitores.id');
    $this->db->join('tipomonitor','tipomonitor.id = monitores.tipo_monitor');
    $this->db->order_by("monitores.apellidos", "asc");
    $resultado= $this->db->get();
    return $resultado->result();
    }
    
    
    public function datomoni($codigo){
        $this->db->select('monitores.codigo, monitores.nombres,monitores.apellidos,monitores.correo,monitores.correo,monitores.tel,monitores.direccion,monitores.barrio,monitores.ciudad,programas.nombre as programas,monitores.semestre,monitores.areasesorias,monitores.imgperfil,dependecia_monitores.nombre as dependencia,tipomonitor.nombre as tpomonitor,monitores.horaasignadas');
        $this->db->from('monitores');
        $this->db->join('programas','monitores.carrera = programas.id');
        $this->db->join('dependecia_monitores','monitores.dependencia = dependecia_monitores.id');
        $this->db->join('tipomonitor','tipomonitor.id = monitores.tipo_monitor');
        $this->db->where('monitores.codigo',$codigo);
        $this->db->order_by("monitores.apellidos", "asc");
        $resultado= $this->db->get();
        return $resultado->result();
    }
    public function actualizarinfor($datos,$codigo){
       $this->db->set($datos);
        $this->db->where('codigo',$codigo);
        $this->db->update('monitores');
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
    
}
