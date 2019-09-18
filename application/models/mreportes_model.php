<?php
 
class Mreportes_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    
      public function datosp($fecha1,$fecha2){
          
          
        $this->db->select('usuarios.codigo, usuarios.nombresyapellidos,usuarios.carrera,usuarios.correo,tbp.precio, SUM((TIMESTAMPDIFF(HOUR, horasmonitorias.fechainicio, horasmonitorias.fechafin))) AS horas');
        $this->db->from('horasmonitorias');
        $this->db->join('usuarios','usuarios.codigo = horasmonitorias.codigom');
        $this->db->join('tbp','tbp.idpre = horasmonitorias.precio');
        $this->db->where('horasmonitorias.fechainicio >=',''.$fecha1.' 00:00:00' );
        $this->db->where('horasmonitorias.fechafin <= ',''.$fecha2.' 23:00:00');
        $this->db->group_by("horasmonitorias.codigom");
        $this->db->order_by("usuarios.nombresyapellidos", "ASC");
        $resultados= $this->db->get();
        return $resultados->result();
    } 
    
    
    
    
    
}