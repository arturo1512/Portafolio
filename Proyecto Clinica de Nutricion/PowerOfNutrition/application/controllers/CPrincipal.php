<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 05/03/2018
 * Time: 12:26 AM
 */

class CPrincipal extends CI_Controller {
   function __construct() {
      parent::__construct();
      $this->load->model('mlogin');
      $this->load->model('mEmpleado');
      $this->load->model('mUsuario');
      $this->load->model('mDireccion');
      $this->load->model('mUserGrup');
      $this->load->model('mMaterial');
   }

   public function index() {
      $this->load->view('layout/header');
      $this->load->view('layout/menu');
      $this->load->view('layout/bienvenido', $GLOBALS);
      $this->load->view('layout/footer');
   }

   public function registrarMiembro() {
      $data['swal'] = '';
      $data['mensaje'] = '';
      $data['mensaje2'] = '';
      $data['simbolo'] = '';
      $this->load->view('layout/header');
      $this->load->view('layout/menu');
      $this->load->view('page/vregistro', $data);
      $this->load->view('layout/footer');
   }

   public function guardarRegistro() {
      //Empleado
      $emple['vc_nombre'] = $this->input->post('Nombre');
      $emple['vc_apePatern'] = $this->input->post('aPaterno');
      $emple['vc_apeMat'] = $this->input->post('aMaterno');
      $emple['vc_telefono'] = $this->input->post('telefono');
      $emple['vc_mail'] = $this->input->post('email');
      $emple['dt_nacimiento'] = $this->input->post('fechaNac');
      //Direccion
      $direcc['vc_calle'] = $this->input->post('calle');
      $direcc['i_numero'] = $this->input->post('numero');
      $direcc['i_cp'] = $this->input->post('cp');
      $direcc['vc_colonia'] = $this->input->post('colonia');
      $direcc['vc_ciudad'] = $this->input->post('ciudad');
      $direcc['vc_estado'] = $this->input->post('estado');
      $direcc['vc_municipio'] = $this->input->post('municipio');
      //Grupo
      $grup['i_pk_Grupo'] = $this->input->post('idgrupo');
      //Usuario
      $us = $this->input->post('usuario');
      $user['vc_user'] = $this->input->post('usuario');
      $user['vc_password'] = $this->input->post('password');
      $user['vc_mail'] = $this->input->post('email');
      //Conecxion con el Modelo;

      if ($this->mUsuario->validaUser($us) == 1) {
         $data['swal'] = "swal";
         $data['mensaje'] = "Usuario Ya existe";
         $data['mensaje2'] = "Intentalo de Nuevo";
         $data['simbolo'] = "error";
         $this->load->view('layout/header');
         $this->load->view('layout/menu');
         $this->load->view('page/vregistro', $data);
         $this->load->view('layout/footer');
      } else {
         $this->mEmpleado->insertarEmpleado($emple, $direcc);
         $this->mDireccion->insertarDireccion($direcc);
         $this->mUserGrup->insertarUserGrup($grup);
         $this->mUsuario->insertarUsuario($user);
         $data['swal'] = "swal";
         $data['mensaje'] = "Regitrado";
         $data['mensaje2'] = "Con Exito";
         $data['simbolo'] = "success";
         $this->load->view('layout/header');
         $this->load->view('layout/menu');
         $this->load->view('page/vregistro', $data);
         $this->load->view('layout/footer');
      }
   }


   //
   //    public function insertMat() {
   //        $mMat = new mMaterial();
   //        $mMat->setIPkMaterial(1);
   //        $mMat->setVcNombre('Test');
   //        $mMat->setICantidadMat(2);
   //        $mMat->setTxtDesc('Test');
   //        $mMat->setBolStatus(1);
   //        $mMat->insert();
   //        echo "Estoy Imprimiento ".$mMat->getVcNombre();
   //    }
}
