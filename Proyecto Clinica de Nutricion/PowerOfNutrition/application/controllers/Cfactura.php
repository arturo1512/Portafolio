<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 04/05/2018
 * Time: 05:15 PM
 */

class Cfactura extends CI_Controller {

   /**
    * Cfactura constructor.
    */
   public function __construct() {
      parent::__construct();
      $this->load->model('mFactura');
      $this->load->model('mlogin');

   }

   public function vFactura() {
      $this->load->view('layout/header');
      $this->load->view('layout/menu');
      $this->load->view('page/vFactura');
      $this->load->view('layout/footer');


   }

   public function guardaFactura() {
      $factura = new mFactura();

      //$factura->setIPkIdFactura($this->input->post(''));
      $factura->setVcRfc($this->input->post('RFC'));
      $factura->setVcNombre($this->input->post('Nombre'));
      $factura->setVcApepat($this->input->post('ApellidoP'));
      $factura->setVcApemat($this->input->post('ApellidoM'));
      $factura->setVcCalle($this->input->post('Calle'));
      $factura->setINumero($this->input->post('Numero'));
      $factura->setDCodPostal($this->input->post('CodigoPostal'));
      $factura->setVcCiudad($this->input->post('Ciudad'));
      $factura->setVcEstado($this->input->post('Estado'));
      $factura->setVcMail($this->input->post('correo'));
      $factura->setDTel($this->input->post('Telefono'));
      $factura->setIFkIdTicket($this->input->post('ticket'));
      $factura->insertaFactura();
      redirect('Cfactura/vFactura');


   }


}