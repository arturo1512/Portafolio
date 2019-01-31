<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 04/05/2018
 * Time: 11:19 PM
 */

class Cnomina extends CI_Controller {
   function __construct() {
      parent::__construct();
      $this->load->model('mNomina');
      $this->load->model('mlogin');

   }

   public function ListaNomina() {
      $this->load->view('layout/header');
      $this->load->view('layout/menu');
      $this->load->view('page/vnomina');
      $this->load->view('layout/footer');
   }

   public function muestraNomina() {
      $data = intval($this->input->post('active'));
      if ($data == 1) {
         echo json_encode($this->mNomina->selectReciboNom());
      } else {
         echo json_encode($this->mNomina->selectReciboActivo());
      }
   }

   public function actualizaNomina() {
      $mater = new mNomina();
      $mater->setIPkIdNomina($this->input->post('mhdnIdCita'));
      $mater->setIFkNumEmp($this->input->post('mtxtIdCliente'));
      $mater->setIFkIdNomina($this->input->post('mtxtIdCliente'));
      $mater->setDSueldo($this->input->post('mtxtTipo'));
      $mater->setDtFechaRecibo($this->input->post('mtxtFechaInicio'));
      redirect('CNomina/ListaNomina');

   }

   public function updateStatusNomina() {
      $data = $this->input->post();
      $mater = new mNomina();
      $mater->setIPkIdNomina($data['inIdFactura']);
      $mater->setBolStatus($data['inBolStatus']);
      $mater->updateStatusRecibo();
      //redirect('CInventario/vMaterial');
   }

   public function deleteActivoRecibo() {
      $data = $this->input->post();
      $mater = new mNomina();
      $mater->setIPkIdNomina($data['postIdFactura']);
      $mater->setBolStatus($data['postBoolActivo']);
      $mater->deleteActivoRecibo();

   }


}