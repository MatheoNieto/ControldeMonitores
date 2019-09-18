<?php

class Bitacora_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function fitrandoxalgo($codigo,$fechaini,$fechafin,$tmonitoria){
        $this->db->select('bitacora.id,bitacora.fechainicio,bitacora.descriocion,bitacora.fechafin,tipo_monitoria.nombre,bitacora.idmonitoria');
        $this->db->from('bitacora');
        $this->db->join('tipo_monitoria','tipo_monitoria.id = bitacora.tipomonitoria');
        $this->db->where('bitacora.monitore',$codigo);
        $this->db->where('bitacora.fechainicio >=',$fechaini.' 00:00:00' );
        $this->db->where('bitacora.fechafin <= ',$fechafin.' 23:00:00');
        $this->db->where('bitacora.tipomonitoria',$tmonitoria);
        $resultado= $this->db->get();
        return $resultado->result();

    }
    
    public function tipomonitorias(){
        $this->db->select('*');
        $this->db->order_by("nombre", "asc");
        $resultado= $this->db->get('tipo_monitoria');
        return $resultado->result();
    }

    public function modificarsession($datos,$id){
        $this->db->set($datos);
        $this->db->where('id',$id);
        $this->db->update('monitorias');
    }
    public function modificarbitacora($datos,$id){
        $this->db->set($datos);
        $this->db->where('id',$id);
        $this->db->update('bitacora');
    }
    public function inimoitoria($datos){
        $this->db->insert('monitorias',$datos);      
         if ($this->db->affected_rows() > 0){
          return true;
        }else{
          return false;
      } 
    } 
    public function elimarregistro($id){
        $this->db->where('id', $id);
        $this->db->delete('bitacora');
    
        }

}