<?php

/**
 * Created by PhpStorm.
 * User: artur
 * Date: 24/12/2018
 * Time: 03:12 PM
 */
class Cpersona extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Mpersona');
        $this->load->model('Musuario');
        $this->load->library('encryption');

    }

    public function index()
    {
        $this->load->view('Persona/VregPersona');
    }

    public function guardar()
    {
        $param['vc_nombre'] = $this->input->post('txtNom');
        $param['vc_appat'] = $this->input->post('txtApp');
        $param['vc_apmat'] = $this->input->post('txtApm');
        $param['vc_telefono'] = $this->input->post('txtTel');
        $param['vc_calle'] = $this->input->post('txtCalle');
        $param['i_num'] = $this->input->post('txtNum');
        $param['vc_colonia'] = $this->input->post('txtCol');
        $param['vc_municipio'] = $this->input->post('txtMun');
        $param['vc_ciudad'] = $this->input->post('txtCiu');
        $param['vc_codPost'] = $this->input->post('txtCp');
//        entrada de datos de usuario
        $paramUsu['vc_nomUsuario'] = $this->input->post('txtUsu');
        $paramUsu['vc_clave'] = $this->encryption->encrypt($this->input->post('txtClave'));

        $lastId = $this->Mpersona->guardar($param);
//        Metodo para traer el ultimo usuario
        if ($lastId > 0) {
            $paramUsu['I_pk_idPersona'] = $lastId;
            $this->Musuario->guardarUsuario($paramUsu);
            $this->load->view('Persona/VregPersona');
        }

    }

    public function actualizarDatos()
    {
        $param['vc_nombre'] = $this->input->post('txtNom');
        $param['vc_appat'] = $this->input->post('txtApp');
        $param['vc_apmat'] = $this->input->post('txtApm');

        $this->Mpersona->actualizarDatos($param);
        //$this->load->view('Persona/VregPersona');
        redirect('Cpersona/index');
    }
}