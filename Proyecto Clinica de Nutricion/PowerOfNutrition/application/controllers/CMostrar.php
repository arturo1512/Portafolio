<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 15/04/2018
 * Time: 05:36 PM
 */

class CMostrar extends CI_Controller {
   /**
    * CMostrar constructor.
    */
   public function __construct() {
      parent::__construct();
      $this->load->model('mEmpleado');
      $this->load->model('mGrupo');
      $this->load->model('mlogin');
   }

   public function mostrarUsuarios() {
      $this->load->view('layout/header');
      $this->load->view('layout/menu');
      $this->load->view('page/vusuarios');
      $this->load->view('layout/footer');
   }

   public function mostrarGrupos() {
      $data['swal'] = '';
      $data['mensaje'] = '';
      $data['mensaje2'] = '';
      $data['simbolo'] = '';
      $data['location1'] = '';
      $this->load->view('layout/header');
      $this->load->view('layout/menu');
      $this->load->view('page/vgrupo', $data);
      $this->load->view('layout/footer');
   }

   public function selectGrupo() {
      echo json_encode($this->mGrupo->selectGrupo());
   }

   public function selectUsuario() {
      echo json_encode($this->mEmpleado->selectEmpleado());
   }

   public function actualizaGrupo() {
      $gr = new mGrupo();
      $gr->setIPkGrupo($this->input->post('mhdnIdGrupo'));
      $gr->setVcTipo($this->input->post('mtxtNombre'));
      $gr->setTxtDescripcion($this->input->post('mtxtDescripcion'));
      if ($this->input->post('cboStatus') == 'Activo') {
         $ban = 1;
         $gr->setIEstado($ban);
      } else {
         $ban = 0;
         $gr->setIEstado($ban);
      }
      $gr->updateGrupo();
      $data['swal'] = "swal";
      $data['mensaje'] = "Grupo Actualizado";
      $data['mensaje2'] = "Con Exito";
      $data['simbolo'] = "success";
      $data['location1'] = "location";
      $this->load->view('layout/header');
      $this->load->view('layout/menu');
      $this->load->view('page/vgrupo', $data);
      $this->load->view('layout/footer');
   }

}