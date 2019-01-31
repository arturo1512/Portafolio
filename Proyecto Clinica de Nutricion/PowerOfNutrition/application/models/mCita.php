<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 19/04/2018
 * Time: 06:44 PM
 */

class mCita extends CI_Model {
   private $i_pk_id_cita;
   private $fk_idCliente;
   private $fk_numEmpleado;
   private $vc_tipo;
   private $dt_fechaInicio;
   private $dt_fecha_final;
   private $dt_hora;
   private $bol_status;
   private $i_pk_idCliente;
   private $vc_nombre;
   private $vc_apePatern;
   private $vc_apeMat;
   private $i_edad;
   private $f_peso;
   private $i_telefono;
   private $vc_mail;
   private $i_fk_idDireccion;

   /**
    * @return mixed
    */
   public function getFkNumEmpleado() {
      return $this->fk_numEmpleado;
   }

   /**
    * @param mixed $fk_numEmpleado
    */
   public function setFkNumEmpleado($fk_numEmpleado) {
      $this->fk_numEmpleado = $fk_numEmpleado;
   }

   /**
    * @return mixed
    */


   /**
    * @return mixed
    */
   public function getDtFechaInicio() {

      return $this->dt_fechaInicio;
   }

   /**
    * @param mixed $dt_fechaInicio
    */
   public function setDtFechaInicio($dt_fechaInicio) {

      $this->dt_fechaInicio = $dt_fechaInicio;

   }

   /**
    * @return mixed
    */
   public function getDtHora() {
      return $this->dt_hora;
   }

   /**
    * @param mixed $dt_hora
    */
   public function setDtHora($dt_hora) {
      $this->dt_hora = $dt_hora;
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
    * mCita constructor.
    */
   public function __construct() {
   }

   /**
    * @return mixed
    */
   public function getIPkIdCita() {
      return $this->i_pk_id_cita;
   }

   /**
    * @param mixed $i_pk_id_cita
    */
   public function setIPkIdCita($i_pk_id_cita) {
      $this->i_pk_id_cita = $i_pk_id_cita;
   }

   /**
    * @return mixed
    */
   public function getFkIdCliente() {
      return $this->fk_idCliente;
   }

   /**
    * @param mixed $fk_idCliente
    */
   public function setFkIdCliente($fk_idCliente) {
      $this->fk_idCliente = $fk_idCliente;
   }

   /**
    * @return mixed
    */
   public function getVcTipo() {
      return $this->vc_tipo;
   }

   /**
    * @param mixed $vc_tipo
    */
   public function setVcTipo($vc_tipo) {
      $this->vc_tipo = $vc_tipo;
   }

   /**
    * @return mixed
    */
   public function getDtFechaFinal() {
      return $this->dt_fecha_final;
   }

   /**
    * @param mixed $dt_fecha_final
    */
   public function setDtFechaFinal($dt_fecha_final) {
      $this->dt_fecha_final = $dt_fecha_final;
   }

   /**
    * @return mixed
    */
   public function getIPkIdCliente() {
      return $this->i_pk_idCliente;
   }

   /**
    * @param mixed $i_pk_idCliente
    */
   public function setIPkIdCliente($i_pk_idCliente) {
      $this->i_pk_idCliente = $i_pk_idCliente;
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
   public function getVcApePatern() {
      return $this->vc_apePatern;
   }

   /**
    * @param mixed $vc_apePatern
    */
   public function setVcApePatern($vc_apePatern) {
      $this->vc_apePatern = $vc_apePatern;
   }


   /**
    * @return mixed
    */
   public function getVcApeMat() {
      return $this->vc_apeMat;
   }

   /**
    * @param mixed $vc_apeMat
    */
   public function setVcApeMat($vc_apeMat) {
      $this->vc_apeMat = $vc_apeMat;
   }

   /**
    * @return mixed
    */
   public function getIEdad() {
      return $this->i_edad;
   }

   /**
    * @param mixed $i_edad
    */
   public function setIEdad($i_edad) {
      $this->i_edad = $i_edad;
   }

   /**
    * @return mixed
    */
   public function getFPeso() {
      return $this->f_peso;
   }

   /**
    * @param mixed $f_peso
    */
   public function setFPeso($f_peso) {
      $this->f_peso = $f_peso;
   }

   /**
    * @return mixed
    */
   public function getITelefono() {
      return $this->i_telefono;
   }

   /**
    * @param mixed $i_telefono
    */
   public function setITelefono($i_telefono) {
      $this->i_telefono = $i_telefono;
   }

   /**
    * @return mixed
    */
   public function getVcMail() {
      return $this->vc_mail;
   }

   /**
    * @param mixed $vc_mail
    */
   public function setVcMail($vc_mail) {
      $this->vc_mail = $vc_mail;
   }

   /**
    * @return mixed
    */
   public function getIFkIdDireccion() {
      return $this->i_fk_idDireccion;
   }

   /**
    * @param mixed $i_fk_idDireccion
    */
   public function setIFkIdDireccion($i_fk_idDireccion) {
      $this->i_fk_idDireccion = $i_fk_idDireccion;
   }

   public function insertaCliente() {
      $arrayCliente = array(
         'i_pk_idCliente' => $this->getIPkIdCliente(),
         'vc_nombre' => $this->getVcNombre(),
         'vc_apePatern' => $this->getVcApePatern(),
         'vc_apeMat' => $this->getVcApeMat(),
         'i_edad' => $this->getIEdad(),
         'f_peso' => $this->getFPeso(),
         'i_telefono' => $this->getITelefono(),
         'vc_mail' => $this->getVcMail(),
         'i_fk_idDireccion' => $this->getIFkIdDireccion());
      $this->db->insert('cliente', $arrayCliente);
   }


   public function insertCita() {
      $campos = array(
         /*
                     'i_pk_id_cita' => $this->getIPkIdCita(),
                     'fk_idCliente' => $this->getFkIdCliente(),
                     'fk_numEmpleado' => $this->getFkNumEmpleado(),*/
         'vc_tipo' => $this->getVcTipo(),
         'dt_fechaInicio' => $this->getDtFechaInicio(),
         'dt_fechaFinal' => $this->getDtFechaFinal(),
         'dt_hora' => $this->getDtHora(),
         'bol_status' => $this->getBolStatus());


      $this->db->insert('cita', $campos);
   }

   public function get_Tipo() {
      $query = $this->db->get('catalogoconsulta');
      $query_result = $query->result();
      return $query_result;

   }


}
