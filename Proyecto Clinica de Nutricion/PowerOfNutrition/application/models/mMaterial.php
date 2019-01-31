<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 07/04/2018
 * Time: 02:25 PM
 */

class mMaterial extends CI_Model {
   private $i_pk_material;
   private $vc_nombre;
   private $i_cantidadMat;
   private $txt_desc;
   private $bol_status;
   private $bool_activo;
   private $Inventario_i_pk_inv;

   /**
    * mMaterial constructor.
    * @param $i_pk_material
    */
   public function __construct() {
   }
   /*
   public function __construct($i_pk_material, $vc_nombre, $i_cantidadMat, $txt_desc, $bol_status, $Inventario_i_pk_inv)
   {
       $this->i_pk_material = $i_pk_material;
       $this->vc_nombre = $vc_nombre;
       $this->i_cantidadMat = $i_cantidadMat;
       $this->txt_desc = $txt_desc;
       $this->bol_status = $bol_status;
       $this->Inventario_i_pk_inv = $Inventario_i_pk_inv;
   }
   */


   /**
    * @return mixed
    */
   public function getIPkMaterial() {
      return $this->i_pk_material;
   }

   /**
    * @param mixed $i_pk_material
    */
   public function setIPkMaterial($i_pk_material) {
      $this->i_pk_material = $i_pk_material;
   }

   /**
    * @return mixed
    */
   public function getVcNombre() {
      return $this->vc_nombre;
   }

   /**
    * @param mixed $vc_nombre
    */
   public function setVcNombre($vc_nombre) {
      $this->vc_nombre = $vc_nombre;
   }

   /**
    * @return mixed
    */
   public function getICantidadMat() {
      return $this->i_cantidadMat;
   }

   /**
    * @param mixed $i_cantidadMat
    */
   public function setICantidadMat($i_cantidadMat) {
      $this->i_cantidadMat = $i_cantidadMat;
   }

   /**
    * @return mixed
    */
   public function getTxtDesc() {
      return $this->txt_desc;
   }

   /**
    * @param mixed $txt_desc
    */
   public function setTxtDesc($txt_desc) {
      $this->txt_desc = $txt_desc;
   }

   /**
    * @return mixed
    */
   public function getBolStatus() {
      return $this->bol_status;
   }

   /**
    * @param mixed $bol_status
    */
   public function setBolStatus($bol_status) {
      $this->bol_status = $bol_status;
   }

   /**
    * @return mixed
    */
   public function getInventarioIPkInv() {
      return $this->Inventario_i_pk_inv;
   }

   /**
    * @return mixed
    */
   public function getBoolActivo() {
      return $this->bool_activo;
   }

   /**
    * @param mixed $bool_activo
    */
   public function setBoolActivo($bool_activo) {
      $this->bool_activo = $bool_activo;
   }


   /**
    * @param mixed $Inventario_i_pk_inv
    */
   public function setInventarioIPkInv($Inventario_i_pk_inv) {
      $this->Inventario_i_pk_inv = $Inventario_i_pk_inv;

   }

   public function insertMaterial() {
      $campos = array(
        // 'i_pk_material' => $this->getIPkMaterial(),
         'vc_nombre' => $this->getVcNombre(),
         'i_cantidadMat' => $this->getICantidadMat(),
         'txt_desc' => $this->getTxtDesc(),
         'bol_status' => $this->getBolStatus(),
         'bool_activo' =>$this->getBoolActivo(),
         'Inventario_i_pk_inv' => $this->getInventarioIPkInv()
      );
      $this->db->insert('material', $campos);
   }

   public function selectMaterial() {
      $this->db->select('i_pk_material, vc_nombre, i_cantidadMat, txt_desc ,bol_status, bool_activo');
      $this->db->from('nutricion.material');
      $res = $this->db->get();
      return $res->result();
   }

   public function selectActiveMaterial(){
      $valor = 1;
      $this->db->select('i_pk_material, vc_nombre, i_cantidadMat, txt_desc ,bol_status, bool_activo');
      $this->db->from('nutricion.material');
      $this->db->where('bool_activo',$valor);
      $res = $this->db->get();
      return $res->result();

   }

   public function updateMaterial(){
      $campos = array(
         'vc_nombre' => $this->getVcNombre(),
         'i_cantidadMat' => $this->getICantidadMat(),
         'txt_desc' => $this->getTxtDesc()
      );
      $this->db->where('i_pk_material', $this->getIPkMaterial());
      $this->db->update('material', $campos);
   }
   public function updateStatusMaterial(){
      $campos = array(
         'bol_status' => $this->getBolStatus()
      );
      $this->db->where('i_pk_material', $this->getIPkMaterial());
      $this->db->update('material', $campos);
   }
   public function deleteActivoMaterial(){
      $campos = array(
         'bool_activo' => $this->getBoolActivo()
      );
      $this->db->where('i_pk_material', $this->getIPkMaterial());
      $this->db->update('material', $campos);
   }
}