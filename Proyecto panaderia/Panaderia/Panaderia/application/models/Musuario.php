<?php

/**
 * Created by PhpStorm.
 * User: artur
 * Date: 29/12/2018
 * Time: 09:01 PM
 */
class Musuario extends CI_Model
{

    function __construct()
    {
        parent:: __construct();
    }

    public function guardarUsuario($param)
    {
        $campos = array(
            'vc_nomUsuario' => $param['vc_nomUsuario'],
            'vc_clave' => $param['vc_clave'],
            'Persona_I_pk_idPersona' => $param['I_pk_idPersona']
        );

        $this->db->insert('usuario',$campos);
    }

}