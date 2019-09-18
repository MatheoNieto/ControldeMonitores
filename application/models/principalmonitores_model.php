<?php

class Principalmonitores_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

    public function datosuser($codigo){
        $this->db->select('*');
        $this->db->where('codigo',$codigo);
        $resultado= $this->db->get('monitores');
        return $resultado->result();
    }

     public function datosp($codigomoni,$fecha1,$fecha2,$tipom){
        $this->db->select('*');
        $this->db->from('horasmonitorias');
        $this->db->join('usuarios','usuarios.codigo = horasmonitorias.codigom');
        $this->db->join('tipo_monitoria','tipo_monitoria.idtm = horasmonitorias.tipom');
        $this->db->join('tbp','tbp.idpre = horasmonitorias.precio');
        $this->db->where('horasmonitorias.codigom',$codigomoni );
        $this->db->where('horasmonitorias.fechainicio >=',''.$fecha1.' 00:00:00' );
        $this->db->where('horasmonitorias.fechafin <= ',''.$fecha2.' 23:00:00');
        $this->db->where('horasmonitorias.tipom',$tipom);
        $this->db->order_by("horasmonitorias.fechainicio", "DESC");
        $resultados= $this->db->get();
        return $resultados->result();
    }



}