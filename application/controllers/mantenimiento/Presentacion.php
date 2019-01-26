<?php

class Presentacion extends CI_Controller{
   
    public function __construct() {
        parent::__construct();
        $this->load->model("Presentacion_model");
    }
   
    public function index() {
        
        $data = array(
            'presentacion'=> $this->Presentacion_model->getPresentacion(),
        );
        
        $this->load->view("layouts/header");
        $this->load->view("layouts/navbar");
        $this->load->view("layouts/aside");
        $this->load->view("admin/presentacion/list",$data);
        $this->load->view("layouts/footer");
    }
    
    public function add() {
        $this->load->view("layouts/header");
        $this->load->view("layouts/navbar");
        $this->load->view("layouts/aside");
        $this->load->view("admin/presentacion/add");
        $this->load->view("layouts/footer");
    }
    
    public function store() {
        $nombre = $this->input->post("nombre");
        $descripcion = $this->input->post("descripcion");
        
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'estado' => "1"
        );
        
        if($this->Presentacion_model->save($data)){
            redirect(base_url()."mantenimiento/presentacion");
        }
        else{
            $this->session->set_flashdata("error","No se puede guardar la informacion");
            redirect(base_url()."mantenimiento/presentacion/add");
        }
    }
    
    public function edit($id) {
        $data = array(
            'presentacion' => $this->Presentacion_model->getPresentacionbyId($id),
            
        );
        
        $this->load->view("layouts/header");
        $this->load->view("layouts/navbar");
        $this->load->view("layouts/aside"); 
        $this->load->view("admin/presentacion/edit", $data);
        $this->load->view("layouts/footer");
    }
    
    public function update() {
        $idPresentacion = $this->input->post("idpresentacion");
        $nombre = $this->input->post("nombre");
        $descripcion = $this->input->post("descripcion");
        
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion
        );
        
        if($this->Presentacion_model->update($idPresentacion,$data)){
            redirect(base_url()."mantenimiento/presentacion");
        }
        else{
            $this->session->set_flashdata("error","No se pudo actualizar la información");
            redirect(base_url()."mantenimiento/presentacion/edit".$idPresentacion);
        }
                
    }
    
    public function delete($id) {
        $data = array(
            'estado' => "0"
        );
        
        $this->Presentacion_model->update($id,$data);
        echo "mantenimiento/presentacion";
    }
}
