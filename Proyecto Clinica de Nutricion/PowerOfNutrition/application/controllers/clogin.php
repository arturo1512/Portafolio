<?php
global $GLOBALS;

class Clogin extends CI_Controller {

   function __construct() {
      parent::__construct();
      $this->load->model('mlogin');
   }

   public function index() {
      $data['swal'] = '';
      $data['mensaje'] = '';
      $this->load->view('page/vlogin', $data);
      $this->session->sess_destroy();
   }

   public function ingresar() {
      $us = $this->input->get('txtUsuario');
      $pas = $this->input->get('txtClave');

      $res = $this->mlogin->ingresar($us, $pas);
      //$user = $res['r'];
      //$grup = $res['vc_Tipo'];
//      $prueba['user'] = $user;
//      $prueba['grup'] = $grup;
//      $prueba2 = $grup->vc_Tipo;
      //$this->session->set_userdata('tipoGrupo', $prueba2);

      if ($res == 1) {
         $tipogrupo = new mlogin();
         $this->load->view('layout/header');
         $this->load->view('layout/menu');
         $this->load->view('layout/bienvenido');
         $this->load->view('layout/footer');
      } else {
         $data['swal'] = "swal";
         $data['mensaje'] = "Usuario ó Contraseña Erronea";
         $this->load->view('page/vlogin', $data);
      }
   }


}
