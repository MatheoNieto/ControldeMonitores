<?php

class Phorario_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function tipomonitorias(){
        $this->db->select('*');
        $this->db->order_by("nombre", "asc");
        $resultado= $this->db->get('tipo_monitoria');
        return $resultado->result();
    }

    public function datosdelhorario($id){
        $this->db->select('*');
        $this->db->where('cod_monitor',$id);
        $resultado= $this->db->get('horariosemes');
        return $resultado->result();
    }
    public function dtso($id){
        $this->db->select('horario');
        $this->db->where('codigo',$id);
        $resultado= $this->db->get('monitores');
        if($resultado->num_rows()>0){
            return $resultado->result();
        }else{
            return false;
        }
    }

    public function insertarsesion($sesion){
        $this->db->insert('horariosemes',$sesion);
        if ($this->db->affected_rows() > 0){
        return true;
        }else{
        return false;
        }
    }

    public function modifica($datos,$id){
        $this->db->set($datos);
        $this->db->where('codigo',$id);
        $this->db->update('monitores');
    }


    public function losdellunes($id){
        $this->db->select('lunes.horainicio,lunes.comentarios, lunes.horafin, lunes.lugartrabajo');
        $this->db->where('code_monitor',$id);
        $resultado= $this->db->get('lunes');
        return $resultado->result();
    
    }
    public function losdelmartes($id){
        $this->db->select('martes.horainicio,martes.comentarios, martes.horafin, martes.lugartrabajo');
        $this->db->where('code_monitor',$id);
        $resultado= $this->db->get('martes');
        return $resultado->result();
    
    }
    public function losdelmiercoles($id){
        $this->db->select('miercoles.horainicio,miercoles.comentarios, miercoles.horafin, miercoles.lugartrabajo');
        $this->db->where('code_monitor',$id);
        $resultado= $this->db->get('miercoles');
        return $resultado->result();
    
    }
    public function losdeljueves($id){
        $this->db->select('jueves.horainicio,jueves.comentarios, jueves.horafin, jueves.lugartrabajo');
        $this->db->where('code_monitor',$id);
        $resultado= $this->db->get('jueves');
        return $resultado->result();
    
    }
    public function losdelviernes($id){
        $this->db->select('viernes.horainicio,viernes.comentarios, viernes.horafin, viernes.lugartrabajo');
        $this->db->where('code_monitor',$id);
        $resultado= $this->db->get('viernes');
        return $resultado->result();

    }
    public function losdelsabado($id){
        $this->db->select('sabado.horainicio,sabado.comentarios, sabado.horafin, sabado.lugartrabajo');
        $this->db->where('code_monitor',$id);
        $resultado= $this->db->get('sabado');
        return $resultado->result();

    }

}