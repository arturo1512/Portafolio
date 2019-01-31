<?php

/**
 * Created by PhpStorm.
 * User: artur
 * Date: 15/01/2019
 * Time: 11:42 AM
 */
class Mlogin extends CI_Model
{
    public function ingresar($usu, $pass)
    {
        $this->db->select('p.I_pk_idPersona,u.i_pk_idUsuario, p.vc_nombre, p.vc_appat,p.vc_apmat');
        $this->db->from('usuario u');
        $this->db->join('persona p', 'p.I_pk_idPersona = u.Persona_I_pk_idPersona');
        $this->db->where('u.vc_nomUsuario', $usu);
        $this->db->where('u.vc_clave', $pass);

        $resultado = $this->db->get();
        if ($resultado->num_rows() == 1) {
            $r = $resultado->row();

            $s_usuario = array(
                'sesion_idPersona'=>$r->I_pk_idPersona,
                'sesion_idusuario' => $r->i_pk_idUsuario,
                'sesion_usuario' => $r->vc_nombre . ", " . $r->vc_appat . ", " . $r->vc_apmat
            );
////esta varibale llamada $s_usuario es llamadaa en la vista ya que almacena el nombre del usuario consultado de la base de datos
//            finalmete es llamada en el archivo VActualizaPersona
            $this->session->set_userdata($s_usuario);
            return 1;
        } else {
            return 0;
        }
    }
}