<?php

/**
 * Created by PhpStorm.
 * User: artur
 * Date: 29/12/2018
 * Time: 08:14 PM
 */
class Mpersona extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function guardar($param)
    {
        $campos = array(
            'vc_nombre' => $param['vc_nombre'],
            'vc_appat' => $param['vc_appat'],
            'vc_apmat' => $param['vc_apmat'],
            'vc_telefono' => $param['vc_telefono'],
            'vc_calle' => $param['vc_calle'],
            'i_num' => $param['i_num'],
            'vc_colonia' => $param['vc_colonia'],
            'vc_municipio' => $param['vc_municipio'],
            'vc_ciudad' => $param['vc_ciudad'],
            'vc_codPost' => $param['vc_codPost']
        );
        $this->db->insert('persona', $campos);

        return $this->db->insert_id();

    }

    public function actualizarDatos($param)
    {
        $campos = array(
            'vc_nombre' => $param['vc_nombre'],
            'vc_appat' => $param['vc_appat'],
            'vc_apmat' => $param['vc_apmat']
        );

        $this->db->update('persona', $campos);
       // $this->db->where('I_pk_idPersona', $this->userdata('sesion_idPersona'));

        return 1;
    }

}