<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class Presentacion_model extends CI_Model {
    //put your code here
    public function getPresentacion() {
        $this->db->where("estado","1");
        $resultados = $this->db->get("presentacion");
        return $resultados->result();
    }
    
    public function save($data) {
        return $this->db->insert("presentacion", $data);
    }
    
    public function getPresentacionbyId($id) {
        $this->db->where("id",$id);
        $resultado = $this->db->get("presentacion");
        return $resultado->row();
    }
    
    public function update($id,$data) {
        $this->db->where("id",$id);
        return $this->db->update("presentacion",$data);
    }
}
