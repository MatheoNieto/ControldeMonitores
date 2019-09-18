<?php

class Principal_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }    
    
    public function allmonitores(){
    $this->db->select('*');
    $this->db->order_by("codigo", "asc");
    $resultado= $this->db->get('monitores');
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
        $resultado= $this->db->get('administrativos');
        return $resultado->result();
    }  
    public function actualizarinforadmin($confi,$id){
         $this->db->set($confi);
        $this->db->where('id',$id);
        $this->db->update('tipo_monitoria');
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
    
    public function knowclosesn($codigo){
        $this->db->where('codigo_monitor',$codigo);     
        $this->db->where('fechafin IS NULL');
        $resultado= $this->db->get('monitorias');
        if($resultado->num_rows()>0){          
            return false;
        }else{
            return true;         
        } 

    }
    
        public function datsinici($codigo){  
        $sql = 'SELECT monitorias.id,monitorias.codigo_monitor,monitorias.fechainicio,monitorias.usario_inicio,monitorias.tipomonitoria,administrativos.nombres AS nombresadmin ,administrativos.apellidos AS apellidosadmin,dependecia_monitores.nombre AS dependencia FROM monitorias INNER JOIN administrativos ON administrativos.codigo = monitorias.usario_inicio INNER JOIN monitores ON monitores.codigo = monitorias.codigo_monitor INNER JOIN dependecia_monitores ON dependecia_monitores.id = monitores.dependencia WHERE monitorias.fechafin IS null AND monitorias.codigo_monitor = '.$codigo;
        $resultado = $this->db->query($sql);  
         if($resultado->num_rows()>0){          
            return $resultado->result();
        }else{
            return false;         
        }
        
    } 
    
    public function inimoitoria($datos){
        $this->db->insert('monitorias',$datos);      
         if ($this->db->affected_rows() > 0){
          return true;
        }else{
          return false;
      } 
    }  
    
    public function finmonitoria($datos,$id){
        $this->db->where('id',$id);
        $this->db->update('monitorias',$datos);   
     
    }
    
}
