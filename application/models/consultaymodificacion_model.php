<?php

class Consultaymodificacion_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function allmonitores(){
    $this->db->select('*');
    $this->db->order_by("codigo", "asc");
    $resultado= $this->db->get('monitores');
    return $resultado->result();
    }

    public function countsuger($codigo,$tipom){
        $this->db->select('COUNT(*) as numbre');
        $this->db->where('monitorias.codigo_monitor',$codigo);
        $this->db->where('monitorias.surge IS NOT NULL');
        $this->db->where('monitorias.tipomonitoria',$tipom);
        $resultado= $this->db->get('monitorias');
        return $resultado->result();

    }

    public function tipomonitorias(){
    $this->db->select('*');
    $this->db->order_by("nombre", "asc");
    $resultado= $this->db->get('tipo_monitoria');
    return $resultado->result();
    }
    public function datosuser($codigo){
        $this->db->where('codigo',$codigo);
        $resultado= $this->db->get('monitores');
        return $resultado->result();
    }

     public function consultarmonitrias($codigomoni,$fecha1,$fecha2,$tipom){
        $this->db->select('monitorias.id,monitorias.fechainicio,monitorias.fechafin,monitorias.surge,monitorias.descripcion,tipo_monitoria.nombre as tipominit,tipo_monitoria.precio AS precio,userinicio.nombres AS nombreini,userinicio.apellidos AS apelidosini,userfinal.nombres as nombrefin,userfinal.apellidos as apellidosfin');
        $this->db->from('monitorias');
        $this->db->join('tipo_monitoria','tipo_monitoria.id = monitorias.tipomonitoria');
        $this->db->join('administrativos AS userinicio','userinicio.codigo = monitorias.usario_inicio');
        $this->db->join('administrativos AS userfinal','userfinal.codigo = monitorias.usuario_fin');
        $this->db->where('monitorias.fechafin IS NOT NULL');
        $this->db->where('monitorias.codigo_monitor',$codigomoni );
        $this->db->where('monitorias.fechainicio >=',''.$fecha1.' 00:00:00' );
        $this->db->where('monitorias.fechafin <= ',''.$fecha2.' 23:00:00');
        $this->db->where('monitorias.tipomonitoria',$tipom);
        $this->db->order_by("monitorias.fechainicio", "DESC");
        $resultados= $this->db->get();
        return $resultados->result();
        
     }
//para las suegrecias a modificar
public function bistacora($codigo,$fechaini,$fechafin,$tmonitoria){
    $this->db->select('bitacora.id,bitacora.fechainicio,bitacora.descriocion,bitacora.fechafin,bitacora.tipomonitoria,tipo_monitoria.nombre,bitacora.idmonitoria');
    $this->db->from('bitacora');
    $this->db->join('tipo_monitoria','tipo_monitoria.id = bitacora.tipomonitoria');
    $this->db->join('monitorias','monitorias.id = bitacora.idmonitoria');
    $this->db->where('bitacora.monitore',$codigo);
    $this->db->where('bitacora.fechainicio >=',$fechaini.' 00:00:00' );
    $this->db->where('bitacora.fechafin <= ',$fechafin.' 23:00:00');
    $this->db->where('monitorias.tipomonitoria',$tmonitoria);
    $resultado= $this->db->get();
    return $resultado->result();

}
    public function datosint($codigomoni,$fecha1,$fecha2){
        $this->db->select('monitorias.id,monitorias.fechainicio,monitorias.fechafin,monitorias.descripcion,tipo_monitoria.nombre AS tipomon,userinicio.nombres AS nombreini,userinicio.apellidos AS apelidosini,userfinal.nombres as nombrefin,userfinal.apellidos as apellidosfin');
        $this->db->from('monitorias');
        $this->db->join('tipo_monitoria','tipo_monitoria.id = monitorias.tipomonitoria');
        $this->db->join('administrativos AS userinicio','userinicio.codigo = monitorias.usario_inicio');
        $this->db->join('administrativos AS userfinal','userfinal.codigo = monitorias.usuario_fin');
        $this->db->where('monitorias.codigo_monitor',$codigomoni );
        $this->db->where('monitorias.fechainicio >=',''.$fecha1.' 00:00:00' );
        $this->db->where('monitorias.fechafin <= ',''.$fecha2.' 23:00:00');
        $this->db->order_by("monitorias.fechainicio", "DESC");
        $resultados= $this->db->get();
        return $resultados->result();
     }
    public function insertarsesion($sesion){
         $this->db->insert('monitorias',$sesion);
         if ($this->db->affected_rows() > 0){
         return true;
         }else{
         return false;
         }
     }

    public function elimarregistro($id){
    $this->db->where('id', $id);
    $this->db->delete('monitorias');

    }
    //
    public function modificarsession($datos,$id){
    $this->db->set($datos);
    $this->db->where('id',$id);
    $this->db->update('monitorias');
    }

}
