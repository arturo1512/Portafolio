<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 23/04/2018
 * Time: 12:07 PM
 */

class CListaCita extends  CI_Controller
{
    /**
     * ClistaCita constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('mListaCita');
       $this->load->model('mlogin');

    }


    /**
     * ClistaCita constructor.
     */


    public function listaCita()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu');

        $this->load->view('page/VListaCita');
        $this->load->view('layout/footer');


    }
    public function muestraCita() {
        $data = intval($this->input->post('active'));
        if($data == 1) {
            echo json_encode($this->mListaCita->selectCitaCliente());
        }else{
            echo json_encode($this->mListaCita->selectActiveCita());
        }
    }

    public function actualizaCita() {
        $mater = new mListaCita();
        $mater->setIPkIdCita($this->input->post('mhdnIdCita'));
        $mater->setCliente($this->input->post('mtxtIdCliente'));
        $mater->setVcTipo($this->input->post('mtxtTipo'));
        $mater->setDtFechaInicio($this->input->post('mtxtFechaInicio'));
        $mater->setDtFechaFinal($this->input->post('mtxtFechaFinal'));
        $mater->setDtHoraa($this->input->post('mtxtHora'));
        $mater->updateCita();
       redirect('CListaCita/listaCita');

    }
    public function updateStatusCita () {
        $data = $this->input->post();
        $mater = new mListaCita();
        $mater->setIPkIdCita($data['inIdCita']);
        $mater->setBolStatus($data['inBolStatus']);
        $mater->updateStatusCita();
        //redirect('CInventario/vMaterial');
    }
    public function deleteActivaCita () {
        $data = $this->input->post();
        $mater = new mListaCita();
        $mater->setIPkIdCita($data['postIdCita']);
        $mater->setBolStatus($data['postBoolActivo']);
        $mater->deleteActivoCita();

    }


}