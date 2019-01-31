<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 28/03/2018
 * Time: 11:20 PM
 */

class mEmpleado extends CI_Model {

   private $i_pk_num_emp;
   private $vc_nombre;
   private $vc_apePatern;
   private $vc_apeMat;
   private $dt_nacimiento;
   private $vc_telefono;
   private $vc_mail;
   private $i_fk_idDireccion;
   private $i_fk_idUser;

   public function __construct() {
   }

   /**
    * @return mixed
    */
   public function getIPkNumEmp() {
      return $this->i_pk_num_emp;
   }

   /**
    * @param mixed $i_pk_num_emp
    */
   public function setIPkNumEmp($i_pk_num_emp) {
      $this->i_pk_num_emp = $i_pk_num_emp;
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
   public function getDtNacimiento() {
      return $this->dt_nacimiento;
   }

   /**
    * @param mixed $dt_nacimiento
    */
   public function setDtNacimiento($dt_nacimiento) {
      $this->dt_nacimiento = $dt_nacimiento;
   }

   /**
    * @return mixed
    */
   public function getVcTelefono() {
      return $this->vc_telefono;
   }

   /**
    * @param mixed $vc_telefono
    */
   public function setVcTelefono($vc_telefono) {
      $this->vc_telefono = $vc_telefono;
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

   /**
    * @return mixed
    */
   public function getIFkIdUser() {
      return $this->i_fk_idUser;
   }

   /**
    * @param mixed $i_fk_idUser
    */
   public function setIFkIdUser($i_fk_idUser) {
      $this->i_fk_idUser = $i_fk_idUser;
   }

   public function selectEmpleado() {
      $this->db->select('e.i_pk_num_emp,  g.vc_Tipo, u.vc_user, e.vc_nombre, e.vc_apePatern, e.vc_apeMat, e.dt_nacimiento, e.vc_telefono, e.vc_mail,
         d.vc_calle, d.i_numero, d.i_cp, d.vc_colonia, d.vc_ciudad, d.vc_estado, d.vc_municipio');
      $this->db->from('empleado e');
      $this->db->join('usuario u', 'e.i_pk_num_emp = u.i_pk_idUser');
      $this->db->join('direccion d', 'e.i_pk_num_emp = d.i_pk_idDireccion');
      $this->db->join('usergrup ug', 'ug.i_pk_idUser = u.i_pk_idUser');
      $this->db->join('grupo g', 'g.i_pk_Grupo = ug.i_pk_Grupo');
      $this->db->order_by('e.i_pk_num_emp');

      $res = $this->db->get();
      return $res->result();
   }

   public function insertarEmpleado($emple) {
      $campos = array(
         'vc_nombre' => $emple['vc_nombre'],
         'vc_apePatern' => $emple['vc_apePatern'],
         'vc_apeMat' => $emple['vc_apeMat'],
         'dt_nacimiento' => date("Y/m/d", strtotime($emple['dt_nacimiento'])),
         'vc_telefono' => $emple['vc_telefono'],
         'vc_mail' => $emple['vc_mail']
      );
      $this->db->insert('empleado', $campos);
   }

}