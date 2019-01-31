<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 26/04/2018
 * Time: 09:17 PM
 */

class CProducto extends CI_Controller {
   public function __construct() {
      parent::__construct();
      $this->load->model('mProducto');
      $this->load->model('mlogin');
   }

   public function vProducto() {
      $data['swal'] = '';
      $data['mensaje'] = '';
      $data['mensaje2'] = '';
      $data['simbolo'] = '';
      $data['location1'] = '';
      $this->load->view('layout/header');
      $this->load->view('layout/menu');
      $this->load->view('page/vproductomedico', $data);
      $this->load->view('layout/footer');
   }

   public function muetraProducto() {
      $data = intval($this->input->post('active'));
      if ($data == 1) {
         echo json_encode($this->mProducto->selectProducto());
      } else {
         echo json_encode($this->mProducto->selectActiveProducto());
      }
   }

   public function actualizaProducto() {
      //Falta cambiar los st('mhdnIdMaterial'));
      $prod = new mProducto();
      $prod->setIPkCodigoBarras($this->input->post('mhdnIdProducto'));
      $prod->setVcNombre($this->input->post('mtxtNombre'));
      $prod->setFPrecio($this->input->post('mtxtPrecio'));
      $prod->setVcPresentacion($this->input->post('mtxtPrecentacion'));
      $prod->setTxtDesc($this->input->post('mtxtDescripcion'));
      $prod->setDtCaducidad($this->input->post('mtxtCaducidad'));
      $prod->updateProducto();
      redirect('CProducto/vProducto');
   }

   public function updateStatusProducto() {
      $data = $this->input->post();
      $prod = new mProducto();
      $prod->setIPkCodigoBarras($data['inIdProducto']);
      $prod->setBolStatus($data['inBolStatus']);
      $prod->updateStatusProducto();
      redirect('CInventario/vProducto');
   }

   public function deleteActivoProducto() {
      $data = $this->input->post();
      $prod = new mProducto();
      $prod->setIPkCodigoBarras($data['postIdProducto']);
      $prod->setBoolActivo($data['postBoolActivo']);
      $prod->deleteActivoProducto();
      redirect('CInventario/vProducto');
   }

   public function insertProducto() {
      $prod = new mProducto();
      //      $mater->setIPkMaterial($this->input->post('mhdnIdMaterial'));
      $prod->setVcNombre($this->input->post('mtxtNombre'));
      $prod->setFPrecio($this->input->post('mtxtPrecio'));
      $prod->setVcPresentacion($this->input->post('mtxtPrecentacion'));
      $prod->setTxtDesc($this->input->post('mtxtDescripcion'));
      $prod->setDtCaducidad($this->input->post('mtxtCaducidad'));
      $prod->setBolStatus(1);
      $prod->setBoolActivo(1);
      $prod->insertProducto();
      $data['swal'] = "swal";
      $data['mensaje'] = "Agregado";
      $data['mensaje2'] = "";
      $data['simbolo'] = "success";
      $data['location1'] = "location";
      $this->load->view('layout/header');
      $this->load->view('layout/menu');
      $this->load->view('page/vproductomedico', $data);
      $this->load->view('layout/footer');
      redirect('CProducto/vProducto');
   }


}