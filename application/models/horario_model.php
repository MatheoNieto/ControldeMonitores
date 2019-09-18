<?php
 
class Horario_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
     
    public function monitores(){ 
        
        $this->db->select('*');
       $this->db->order_by("usuarios.nombresyapellidos", "asc");
        $resultado= $this->db->get('usuarios');
        return $resultado->result();
        
    }
    
    public function lunes(){
        $this->db->select('horariosemes.lunes,horariosemes.statuslun, monitores.nombres,monitores.apellidos,monitores.codigo');
        $this->db->from('horariosemes');
        $this->db->join('monitores','monitores.codigo = horariosemes.cod_monitor');
        $this->db->where('horariosemes.lunes NOT LIKE "%No%"');
        $this->db->order_by("horariosemes.lunes", "asc");
        $resultado= $this->db->get();
        return $resultado->result();
    
    }
    public function martes(){
        $this->db->select('horariosemes.martes,horariosemes.statusmar, monitores.nombres,monitores.apellidos,monitores.codigo');
        $this->db->from('horariosemes');
        $this->db->join('monitores','monitores.codigo = horariosemes.cod_monitor');
        $this->db->where('horariosemes.martes NOT LIKE "%No%"');
        $this->db->order_by("horariosemes.martes", "asc");
        $resultado= $this->db->get();
        return $resultado->result();
    
    }
    public function miercoles(){
        $this->db->select('horariosemes.miercoles,horariosemes.statusmier, monitores.nombres,monitores.apellidos,monitores.codigo');
        $this->db->from('horariosemes');
        $this->db->join('monitores','monitores.codigo = horariosemes.cod_monitor');
        $this->db->where('horariosemes.miercoles NOT LIKE "%No%"');
        $this->db->order_by("horariosemes.miercoles", "asc");
        $resultado= $this->db->get();
        return $resultado->result();
    
    }
    public function jueves(){
        $this->db->select('horariosemes.jueves,horariosemes.statusjueves, monitores.nombres,monitores.apellidos,monitores.codigo');
        $this->db->from('horariosemes');
        $this->db->join('monitores','monitores.codigo = horariosemes.cod_monitor');
        $this->db->where('horariosemes.jueves NOT LIKE "%No%"');
        $this->db->order_by("horariosemes.jueves", "asc");
        $resultado= $this->db->get();
        return $resultado->result();
    
    }
    public function viernes(){
        $this->db->select('horariosemes.viernes,horariosemes.statusvier, monitores.nombres,monitores.apellidos,monitores.codigo');
        $this->db->from('horariosemes');
        $this->db->join('monitores','monitores.codigo = horariosemes.cod_monitor');
        $this->db->where('horariosemes.viernes NOT LIKE "%No%"');
        $this->db->order_by("horariosemes.viernes", "asc");
        $resultado= $this->db->get();
        return $resultado->result();
    
    }
    public function sabado(){
        $this->db->select('horariosemes.sabado,horariosemes.statussabado, monitores.nombres,monitores.apellidos,monitores.codigo');
        $this->db->from('horariosemes');
        $this->db->join('monitores','monitores.codigo = horariosemes.cod_monitor');
        $this->db->where('horariosemes.sabado NOT LIKE "%No%"');
        $this->db->order_by("horariosemes.sabado", "asc");
        $resultado= $this->db->get();
        return $resultado->result();
    
    }

    //los que estan registrados en los horarios segun los dias

    public function losdellunes(){
        $this->db->select('lunes.horainicio,lunes.comentarios, lunes.horafin, lunes.lugartrabajo,lunes.id,monitores.nombres,monitores.apellidos,monitores.codigo');
        $this->db->from('lunes');
        $this->db->join('monitores','monitores.codigo = lunes.code_monitor');
        $this->db->order_by("lunes.horainicio", "asc");
        $resultado= $this->db->get();
        return $resultado->result();
    
    }
    public function losdelmartes(){
        $this->db->select('martes.horainicio,martes.comentarios, martes.horafin, martes.lugartrabajo,martes.id,monitores.nombres,monitores.apellidos,monitores.codigo');
        $this->db->from('martes');
        $this->db->join('monitores','monitores.codigo = martes.code_monitor');
        $this->db->order_by("martes.horainicio", "asc");
        $resultado= $this->db->get();
        return $resultado->result();
    
    }
    public function losdelmiercoles(){
        $this->db->select('miercoles.horainicio,miercoles.comentarios, miercoles.horafin, miercoles.lugartrabajo,miercoles.id,monitores.nombres,monitores.apellidos,monitores.codigo');
        $this->db->from('miercoles');
        $this->db->join('monitores','monitores.codigo = miercoles.code_monitor');
        $this->db->order_by("miercoles.horainicio", "asc");
        $resultado= $this->db->get();
        return $resultado->result();
    
    }
    public function losdeljueves(){
        $this->db->select('jueves.horainicio,jueves.comentarios, jueves.horafin, jueves.lugartrabajo,jueves.id,monitores.nombres,monitores.apellidos,monitores.codigo');
        $this->db->from('jueves');
        $this->db->join('monitores','monitores.codigo = jueves.code_monitor');
        $this->db->order_by("jueves.horainicio", "asc");
        $resultado= $this->db->get();
        return $resultado->result();
    
    }
    public function losdelviernes(){
        $this->db->select('viernes.horainicio,viernes.comentarios, viernes.horafin, viernes.lugartrabajo,viernes.id,monitores.nombres,monitores.apellidos,monitores.codigo');
        $this->db->from('viernes');
        $this->db->join('monitores','monitores.codigo = viernes.code_monitor');
        $this->db->order_by("viernes.horainicio", "asc");
        $resultado= $this->db->get();
        return $resultado->result();

    }
    public function losdelsabado(){
        $this->db->select('sabado.horainicio,sabado.comentarios, sabado.horafin, sabado.lugartrabajo,sabado.id,monitores.nombres,monitores.apellidos,monitores.codigo');
        $this->db->from('sabado');
        $this->db->join('monitores','monitores.codigo = sabado.code_monitor');
        $this->db->order_by("sabado.horainicio", "asc");
        $resultado= $this->db->get();
        return $resultado->result();

    }



    public function registerthesh($datos,$dia){
        $this->db->insert($dia,$datos);
         if ($this->db->affected_rows() > 0){
          return true;
        }else{
          return false;
      }
    }

    public function deletes($tabala,$id){
        $this->db->where('id', $id);
        $this->db->delete($tabala);
    }

    public function modif($datos,$id,$tabla){
        $this->db->set($datos);
        $this->db->where('id',$id);
        $this->db->update($tabla);
        }
}