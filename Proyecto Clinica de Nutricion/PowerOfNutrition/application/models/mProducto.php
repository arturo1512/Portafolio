<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 26/04/2018
 * Time: 09:25 PM
 */

class mProducto extends CI_Model {

   private $i_pk_codigoBarras;
   private $vc_nombre;
   private $f_precio;
   private $vc_presentacion;
   private $txt_desc;
   private $dt_caducidad;
   private $bol_status;
   private $bool_activo;
   private $fk_id_inventario;

   /**
    * @return mixed
    */
   public function getIPkCodigoBarras() {
      return $this->i_pk_codigoBarras;
   }

   /**
    * @param mixed $i_pk_codigoBarras
    */
   public function setIPkCodigoBarras($i_pk_codigoBarras) {
      $this->i_pk_codigoBarras = $i_pk_codigoBarras;
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
   public function getFPrecio() {
      return $this->f_precio;
   }

   /**
    * @param mixed $f_precio
    */
   public function setFPrecio($f_precio) {
      $this->f_precio = $f_precio;
   }

   /**
    * @return mixed
    */
   public function getVcPresentacion() {
      return $this->vc_presentacion;
   }

   /**
    * @param mixed $vc_presentacion
    */
   public function setVcPresentacion($vc_presentacion) {
      $this->vc_presentacion = $vc_presentacion;
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
   public function getDtCaducidad() {
      return $this->dt_caducidad;
   }

   /**
    * @param mixed $dt_caducidad
    */
   public function setDtCaducidad($dt_caducidad) {
      $this->dt_caducidad = $dt_caducidad;
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
   public function getBoolActivo() {
      return $this->bool_activo;
   }

   /**
    * @param mixed $boo_activo
    */
   public function setBoolActivo($bool_activo) {
      $this->bool_activo = $bool_activo;
   }

   /**
    * @return mixed
    */
   public function getFkIdInventario() {
      return $this->fk_id_inventario;
   }

   /**
    * @param mixed $fk_id_inventario
    */
   public function setFkIdInventario($fk_id_inventario) {
      $this->fk_id_inventario = $fk_id_inventario;
   }

   public function insertProducto() {
      $campos = array(
         'vc_nombre' => $this->getVcNombre(),
         'f_precio' => $this->getFPrecio(),
         'vc_presentacion' => $this->getVcPresentacion(),
         'txt_desc' => $this->getTxtDesc(),
         'dt_caducidad' => date("Y/m/d", strtotime($this->getDtCaducidad())),
         'bol_status' => $this->getBolStatus(),
         'bool_activo' => $this->getBoolActivo()
      );
      $this->db->insert('prodmedico', $campos);
   }
   public function selectProducto() {
      $this->db->select('i_pk_codigoBarras, vc_nombre, f_precio, vc_presentacion, txt_desc, dt_caducidad, bol_status, bool_activo');
      $this->db->from('nutricion.prodmedico');
      $res = $this->db->get();
      return $res->result();
   }
   public function selectActiveProducto(){
      $valor = 1;
      $this->db->select('*');
      $this->db->from('nutricion.prodmedico');
      $this->db->where('bool_activo',$valor);
      $res = $this->db->get();
      return $res->result();
   }
   public function updateProducto(){
      $campos = array(
         'vc_nombre' => $this->getVcNombre(),
         'f_precio' => $this->getFPrecio(),
         'vc_presentacion' => $this->getVcPresentacion(),
         'txt_desc' => $this->getTxtDesc(),
         'dt_caducidad' => date("Y/m/d", strtotime($this->getDtCaducidad()))
      );
      $this->db->where('i_pk_codigoBarras', $this->getIPkCodigoBarras());
      $this->db->update('prodmedico', $campos);
   }
   public function updateStatusProducto(){
      $campos = array(
         'bol_status' => $this->getBolStatus()
      );
      $this->db->where('i_pk_codigoBarras', $this->getIPkCodigoBarras());
      $this->db->update('prodmedico', $campos);
   }
   public function deleteActivoProducto(){
      $campos = array(
         'bool_activo' => $this->getBoolActivo()
      );
      $this->db->where('i_pk_codigoBarras', $this->getIPkCodigoBarras());
      $this->db->update('prodmedico', $campos);
   }

}