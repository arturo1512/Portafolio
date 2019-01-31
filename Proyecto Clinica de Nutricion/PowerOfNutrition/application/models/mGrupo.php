<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 10/04/2018
 * Time: 01:58 AM
 */

class mGrupo extends CI_Model {

   private $i_pk_Grupo;
   private $vc_Tipo;
   private $txt_descripcion;
   private $i_estado;

   /**
    * mGrupo constructor.
    */
   public function __construct() {
   }

   /**
    * @return mixed
    */
   public function getIPkGrupo() {
      return $this->i_pk_Grupo;
   }

   /**
    * @param mixed $i_pk_Grupo
    */
   public function setIPkGrupo($i_pk_Grupo) {
      $this->i_pk_Grupo = $i_pk_Grupo;
   }

   /**
    * @return mixed
    */
   public function getVcTipo() {
      return $this->vc_Tipo;
   }

   /**
    * @param mixed $vc_Tipo
    */
   public function setVcTipo($vc_Tipo) {
      $this->vc_Tipo = $vc_Tipo;
   }

   /**
    * @return mixed
    */
   public function getTxtDescripcion() {
      return $this->txt_descripcion;
   }

   /**
    * @param mixed $txt_descripcion
    */
   public function setTxtDescripcion($txt_descripcion) {
      $this->txt_descripcion = $txt_descripcion;
   }

   /**
    * @return mixed
    */
   public function getIEstado() {
      return $this->i_estado;
   }

   /**
    * @param mixed $i_estado
    */
   public function setIEstado($i_estado) {
      $this->i_estado = $i_estado;
   }

   //retorna todos los datos de la tabla Grupo
   public function getGrupo($dato) {
      $dato = $this->db->get_where('grupo', array('i_estado' => $dato));
      return $dato->result();
   }

   public function getGrupoNombre($dato) {
      $dato = $this->db->get_where('grupo', array('vc_Tipo' => $dato));
      return $dato->result();
   }

   public function insertGrup() {
      $campos = array(
         'vc_Tipo' => $this->getVcTipo(),
         'txt_descripcion' => $this->getTxtDescripcion(),
         'i_estado' => $this->getIEstado()
      );
      $this->db->insert('grupo', $campos);
   }

   public function validaGrupo($gru) {
      $this->db->select('vc_Tipo');
      $this->db->from('nutricion.grupo');
      $this->db->where('vc_Tipo', $gru);
      $resultado = $this->db->get();
      if ($resultado->num_rows() == 1) {
         return 1;
      } else {
         return 0;
      }
   }

   public function selectGrupo() {
      $this->db->select('i_pk_Grupo, vc_Tipo, txt_descripcion, i_estado');
      $this->db->from('nutricion.grupo');
      $res = $this->db->get();
      return $res->result();
   }

   public function updateGrupo() {
      $campos = array(
         'vc_Tipo' => $this->getVcTipo(),
         'txt_descripcion' => $this->getTxtDescripcion(),
         'i_estado' => $this->getIEstado()
      );
      $this->db->where('i_pk_Grupo', $this->getIPkGrupo());
      $this->db->update('grupo', $campos);
   }
}