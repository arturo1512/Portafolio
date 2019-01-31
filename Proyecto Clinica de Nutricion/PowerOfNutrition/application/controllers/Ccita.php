<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 21/04/2018
 * Time: 08:42 PM
 */

class Ccita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mCita');
       $this->load->model('mlogin');

    }

    public function vCitas()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $data['catalogoconsulta'] = $this->mCita->get_Tipo();
        $this->load->view('page/vcita', $data);
        $this->load->view('layout/footer');


    }

    /**
     *
     */
    public function guardaCita()
    {
        $cita = new mCita();

        /*$cita ->setFkNumEmpleado($this->input->post('nombre'));*/

        /*guardad datos del cliente*/

        $cita->setIPkIdCliente($this->input->post(''));
        $cita->setVcNombre($this->input->post('nombre'));
        $cita->setVcApePatern($this->input->post('Apellidop'));
        $cita->setVcApeMat($this->input->post('ApellidoM'));
        $cita->setIEdad($this->input->post('Edad'));
        $cita->setFPeso($this->input->post('Peso'));
        $cita->setITelefono($this->input->post('Telefono'));
        $cita->setVcMail($this->input->post('correo'));
        $cita->setIFkIdDireccion($this->input->post(''));
        $cita->insertaCliente();

        $cita->setFkIdCliente($this->input->post('i_pk_idCliente'));
        $cita->setFkNumEmpleado($this->input->post('nombre'));
        $cita->setDtHora($this->input->post('hora'));
        $cita->setBolStatus($this->input->post(1));
        $cita->setVcTipo($this->input->post('categoria_evento'));
        $cita->setDtFechaInicio($this->input->post('Fecha_inicio'));
        $cita->setDtFechaFinal($this->input->post('Fecha_final'));
        $cita->insertCita();
       redirect('Ccita/vCitas');
        /*llamado de vista*/
        /*   $this->load->view('layout/header');'
           $this->load->view('layout/menu');
           $this->load->view('cita');
           $this->load->view('layout/footer');*/
    }


}