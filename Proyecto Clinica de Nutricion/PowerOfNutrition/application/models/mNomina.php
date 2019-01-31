<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 04/05/2018
 * Time: 11:04 PM
 */

class mNomina extends CI_Model
{
    private $i_pk_id_nomina;
    private $i_fk_num_emp;
    private $i_fk_idNomina;
    private $d_sueldo;
    private $dt_fechaRecibo;
    private $bol_status;

    /**
     * @return mixed
     */
    public function getIPkIdNomina()
    {
        return $this->i_pk_id_nomina;
    }

    /**
     * @param mixed $i_pk_id_nomina
     */
    public function setIPkIdNomina($i_pk_id_nomina)
    {
        $this->i_pk_id_nomina = $i_pk_id_nomina;
    }

    /**
     * @return mixed
     */
    public function getIFkNumEmp()
    {
        return $this->i_fk_num_emp;
    }

    /**
     * @param mixed $i_fk_num_emp
     */
    public function setIFkNumEmp($i_fk_num_emp)
    {
        $this->i_fk_num_emp = $i_fk_num_emp;
    }

    /**
     * @return mixed
     */
    public function getIFkIdNomina()
    {
        return $this->i_fk_idNomina;
    }

    /**
     * @param mixed $i_fk_idNomina
     */
    public function setIFkIdNomina($i_fk_idNomina)
    {
        $this->i_fk_idNomina = $i_fk_idNomina;
    }

    /**
     * @return mixed
     */
    public function getDSueldo()
    {
        return $this->d_sueldo;
    }

    /**
     * @param mixed $d_sueldo
     */
    public function setDSueldo($d_sueldo)
    {
        $this->d_sueldo = $d_sueldo;
    }

    /**
     * @return mixed
     */
    public function getDtFechaRecibo()
    {
        return $this->dt_fechaRecibo;
    }

    /**
     * @param mixed $dt_fechaRecibo
     */
    public function setDtFechaRecibo($dt_fechaRecibo)
    {
        $this->dt_fechaRecibo = $dt_fechaRecibo;
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


    public function selectReciboNom()
    {
        $this->db->select('*');
        $this->db->from('nutricion.recibonom');
        $res = $this->db->get();
        return $res->result();
    }

    public function selectReciboActivo()
    {
        // $valor = 1;
        $this->db->select('*');
        $this->db->from('nutricion.recibonom');
        // $this->db->where('bol_status', $valor);
        $res = $this->db->get();
        return $res->result();

    }


    public function updateRecibo()
    {
        $campos = array(
            'i_fk_num_emp' => $this->getIFkNumEmp(),
            'i_fk_idNomina' => $this->getIFkIdNomina(),
            'd_sueldo' => $this->getDSueldo(),
            'dt_fechaRecibo' => $this->getDtFechaRecibo()
        );
        $this->db->where('i_pk_id_nomina', $this->getIPkIdNomina());
        $this->db->update('recibonom', $campos);
    }

    public function updateStatusRecibo()
    {
        $campos = array(
            'bol_status' => $this->getBolStatus()
        );
        $this->db->where('i_pk_id_nomina', $this->getIPkIdNomina());
        $this->db->update('recibonom', $campos);
    }

    public function deleteActivoRecibo()
    {
        $campos = array(
            'bol_status' => $this->getBolStatus()
        );
        $this->db->where('i_pk_id_nomina', $this->getIPkIdNomina());
        $this->db->update('recibonom', $campos);
    }


}