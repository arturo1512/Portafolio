<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 29/03/2018
 * Time: 12:25 AM
 */

class mUsuario extends CI_Model
{
    public function validaUser ($us) {
        $this->db->select('vc_user');
        $this->db->from('nutricion.usuario');
        $this->db->where('vc_user', $us);
        //queda pentiende ver la validacion para que no se repitan usuarios
        $resultado = $this->db->get();
        if ($resultado->num_rows() == 1) {
            return 1;
        } else {
            return 0;
        }

    }
    public function insertarUsuario($user)
    {
        $campos = array(
            'vc_user' => $user['vc_user'],
            'vc_password' => $user['vc_password'],
            'vc_mail' => $user['vc_mail'],
            'bool_status' => '1'
        );
        $this->db->insert('usuario', $campos);
    }
}