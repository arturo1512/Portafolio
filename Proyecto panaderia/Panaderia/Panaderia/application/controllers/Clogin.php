<?php

/**
 * Created by PhpStorm.
 * User: artur
 * Date: 14/01/2019
 * Time: 07:07 PM
 */
class Clogin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mlogin');
        $this->load->library('encryption');
    }

    public function index()
    {
        $data['mensaje'] = '';
        $this->load->view('Vlogin', $data);
    }

    public function ingresar()
    {
        $usu = $this->input->post('txtUsu');
        $pass = $this->encryption->encrypt($this->input->post('txtClave'));
        $res = $this->Mlogin->ingresar($usu, $pass);

        if ($res == 1) {
            $this->load->view('Persona/VActualizaPersona');

        } else {
            $data['mensaje'] = "Usuario o contraseña erronea";
            $this->load->view('Vlogin', $data);
        }
    }
}