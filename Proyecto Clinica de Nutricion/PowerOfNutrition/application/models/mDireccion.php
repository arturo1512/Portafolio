<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 29/03/2018
 * Time: 12:26 AM
 */

class mDireccion extends CI_Model
{

    public function insertarDireccion($direcc)
    {
        $campos = array(
            'vc_calle' => $direcc['vc_calle'],
            'i_numero' => $direcc['i_numero'],
            'i_cp' => $direcc['i_cp'],
            'vc_colonia' => $direcc['vc_colonia'],
            'vc_ciudad' => $direcc['vc_ciudad'],
            'vc_estado' => $direcc['vc_estado'],
            'vc_municipio' => $direcc['vc_municipio']
        );
        $this->db->insert('direccion', $campos);

    }

}