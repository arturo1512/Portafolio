<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 10/04/2018
 * Time: 02:15 AM
 */

class Cgrupo extends CI_Controller {
   /**
    * Cgrupo constructor.
    */
   public function __construct() {
      parent::__construct();
      $this->load->model('mGrupo');
      $this->load->model('mlogin');
   }

   public function crearGrupo() {
      $data['swal'] = '';
      $data['mensaje'] = '';
      $data['mensaje2'] = '';
      $data['simbolo'] = '';
      $this->load->view('layout/header');
      $this->load->view('layout/menu');
      $this->load->view('page/vregistragrupo', $data);
      $this->load->view('layout/footer');
   }

   public function getGrupos() {
      //Parametro que viene de jQuery js/jgrupo.js
      $dato = $this->input->post('i_estado');
      $resultado = $this->mGrupo->getGrupo($dato);

      echo json_encode($resultado);
   }

   public function nuevoGrupo() {
      $nGrup = new mGrupo();
      $nGrup->setVcTipo($this->input->post('NombreGrupo'));
      $nGrup->setTxtDescripcion($this->input->post('descGrupo'));
      $nGrup->setIEstado(1);
      if (1 == $nGrup->validaGrupo($nGrup->getVcTipo())) {
         $data['swal'] = "swal";
         $data['mensaje'] = "Grupo Ya existe";
         $data['mensaje2'] = "Intentalo de Nuevo";
         $data['simbolo'] = "error";
         $this->load->view('layout/header');
         $this->load->view('layout/menu');
         $this->load->view('page/vregistragrupo', $data);
         $this->load->view('layout/footer');
      } else {
         $nGrup->insertGrup();
         $data['swal'] = "swal";
         $data['mensaje'] = "Grupo Creado";
         $data['mensaje2'] = "Con Exito";
         $data['simbolo'] = "success";
         $this->load->view('layout/header');
         $this->load->view('layout/menu');
         $this->load->view('page/vregistragrupo', $data);
         $this->load->view('layout/footer');
      }
   }
}