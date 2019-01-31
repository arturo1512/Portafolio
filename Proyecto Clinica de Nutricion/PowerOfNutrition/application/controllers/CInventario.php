<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 21/04/2018
 * Time: 10:27 AM
 */

class CInventario extends CI_Controller {
   public function __construct() {
      parent::__construct();
      $this->load->model('mMaterial');
      $this->load->model('mlogin');
   }

   public function vMaterial() {
      $data['swal'] = '';
      $data['mensaje'] = '';
      $data['mensaje2'] = '';
      $data['simbolo'] = '';
      $data['location1'] = '';
      $this->load->view('layout/header');
      $this->load->view('layout/menu');
      $this->load->view('page/vmaterial', $data);
      $this->load->view('layout/footer');
   }

   public function muetraMaterial() {
      $data = intval($this->input->post('active'));
      if($data == 1) {
          echo json_encode($this->mMaterial->selectMaterial());
      }else{
          echo json_encode($this->mMaterial->selectActiveMaterial());
      }
   }

   public function actualizaMaterial() {
      $mater = new mMaterial();
      $mater->setIPkMaterial($this->input->post('mhdnIdMaterial'));
      $mater->setVcNombre($this->input->post('mtxtNombre'));
      $mater->setICantidadMat($this->input->post('mtxtCantidad'));
      $mater->setTxtDesc($this->input->post('mtxtDescripcion'));
      $mater->updateMaterial();
      redirect('CInventario/vMaterial');
   }
   public function updateStatusMaterial () {
      $data = $this->input->post();
      $mater = new mMaterial();
      $mater->setIPkMaterial($data['inIdMaterial']);
      $mater->setBolStatus($data['inBolStatus']);
      $mater->updateStatusMaterial();
      //redirect('CInventario/vMaterial');
   }
   public function deleteActivoMaterial () {
      $data = $this->input->post();
      $mater = new mMaterial();
      $mater->setIPkMaterial($data['postIdMaterial']);
      $mater->setBoolActivo($data['postBoolActivo']);
      $mater->deleteActivoMaterial();
      //redirect('CInventario/vMaterial');
   }

   public function insertMaterial() {
      $mater = new mMaterial();
      //      $mater->setIPkMaterial($this->input->post('mhdnIdMaterial'));
      $mater->setVcNombre($this->input->post('mtxtNombre'));
      $mater->setICantidadMat($this->input->post('mtxtCantidad'));
      $mater->setTxtDesc($this->input->post('mtxtDescripcion'));
      $mater->setBolStatus(1);
      $mater->setBoolActivo(1);
      $mater->insertMaterial();
      $data['swal'] = "swal";
      $data['mensaje'] = "Agregado";
      $data['mensaje2'] = "";
      $data['simbolo'] = "success";
      $data['location1'] = "location";
      $this->load->view('layout/header');
      $this->load->view('layout/menu');
      $this->load->view('page/vmaterial', $data);
      $this->load->view('layout/footer');
      redirect('CInventario/vMaterial');

   }
}