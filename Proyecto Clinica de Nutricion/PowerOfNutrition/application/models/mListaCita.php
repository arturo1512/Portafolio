<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 23/04/2018
 * Time: 12:17 PM
 */

class mListaCita extends CI_Model
{
    private $i_pk_id_cita;
    private $Numerodecliente;
    private $dt_horaa;
    private $bol_status;
    private $vc_tipo;
    private $dt_fechaInicio;
    private $dt_fecha_final;
    private $Cliente;

    /**
     * @return mixed
     */
    public function getIPkIdCita()
    {
        return $this->i_pk_id_cita;
    }

    /**
     * @param mixed $i_pk_id_cita
     */
    public function setIPkIdCita($i_pk_id_cita)
    {
        $this->i_pk_id_cita = $i_pk_id_cita;
    }

    /**
     * @return mixed
     */
    public function getNumerodecliente()
    {
        return $this->Numerodecliente;
    }

    /**
     * @param mixed $Numerodecliente
     */
    public function setNumerodecliente($Numerodecliente)
    {
        $this->Numerodecliente = $Numerodecliente;
    }

    /**
     * @return mixed
     */
    public function getDtHoraa()
    {
        return $this->dt_horaa;
    }

    /**
     * @param mixed $dt_horaa
     */
    public function setDtHoraa($dt_horaa)
    {
        $this->dt_horaa = $dt_horaa;
    }

    /**
     * @return mixed
     */
    public function getBolStatus()
    {
        return $this->bol_status;
    }

    /**
     * @param mixed $bol_status
     */
    public function setBolStatus($bol_status)
    {
        $this->bol_status = $bol_status;
    }

    /**
     * @return mixed
     */
    public function getVcTipo()
    {
        return $this->vc_tipo;
    }

    /**
     * @param mixed $vc_tipo
     */
    public function setVcTipo($vc_tipo)
    {
        $this->vc_tipo = $vc_tipo;
    }

    /**
     * @return mixed
     */
    public function getDtFechaInicio()
    {
        return $this->dt_fechaInicio;
    }

    /**
     * @param mixed $dt_fechaInicio
     */
    public function setDtFechaInicio($dt_fechaInicio)
    {
        $this->dt_fechaInicio = $dt_fechaInicio;
    }

    /**
     * @return mixed
     */
    public function getDtFechaFinal()
    {
        return $this->dt_fecha_final;
    }

    /**
     * @param mixed $dt_fecha_final
     */
    public function setDtFechaFinal($dt_fecha_final)
    {
        $this->dt_fecha_final = $dt_fecha_final;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->Cliente;
    }

    /**
     * @param mixed $Cliente
     */
    public function setCliente($Cliente)
    {
        $this->Cliente = $Cliente;
    }


    function getLista()
    {
        $query2 = $this->db->get('cita');
        $query2_result = $query2->result();
        return $query2_result;
    }

    /* function getListaCitas()
     {
         $sql = "SELECT i_pk_id_cita,vc_tipo,dt_fechaInicio,dt_fechaFinal,dt_hora,bol_status,Nombre FROM citaCliente";
         $queryLista = $this->db->select($sql);
         return $queryLista;
     }
     */
    public function selectCitaCliente()
    {
        $this->db->select('i_pk_id_cita,fk_idCliente,vc_tipo,dt_fechaInicio,dt_fechaFinal,dt_hora,bol_status');
        $this->db->from('nutricion.cita');
        $res = $this->db->get();
        return $res->result();
    }

    public function selectActiveCita()
    {
       // $valor = 1;
        $this->db->select('i_pk_id_cita,fk_idCliente,vc_tipo,dt_fechaInicio,dt_fechaFinal,dt_hora,bol_status');
        $this->db->from('nutricion.cita');
       // $this->db->where('bol_status', $valor);
        $res = $this->db->get();
        return $res->result();

    }


    public function updateCita()
    {
        $campos = array(
            'vc_tipo' => $this->getVcTipo(),
            'dt_fechaInicio' => $this->getDtFechaInicio(),
            'dt_fechaFinal' => $this->getDtFechaFinal(),
            'dt_hora' => $this->getDtHoraa()
        );
        $this->db->where('i_pk_id_cita', $this->getIPkIdCita());
        $this->db->update('cita', $campos);
    }

    public function updateStatusCita()
    {
        $campos = array(
            'bol_status' => $this->getBolStatus()
        );
        $this->db->where('i_pk_id_cita', $this->getIPkIdCita());
        $this->db->update('cita', $campos);
    }

    public function deleteActivoCita()
    {
        $campos = array(
            'bol_status' => $this->getBolStatus()
        );
        $this->db->where('i_pk_id_cita', $this->getIPkIdCita());
        $this->db->update('cita', $campos);
    }

}