<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 04/05/2018
 * Time: 05:09 PM
 */

class mFactura extends  CI_Model
{

    private $i_pk_idFactura;
    private $vc_rfc;
    private $vc_nombre;
    private $vc_apepat;
    private $vc_apemat;
    private $vc_calle;
    private $i_numero;
    private $d_codPostal;
    private $vc_ciudad;
    private $vc_estado;
    private $vc_mail;
    private $d_tel;
    private $i_fk_idTicket;

    /**
     * @return mixed
     */
    public function getVcEstado()
    {
        return $this->vc_estado;
    }

    /**
     * @param mixed $vc_estado
     */
    public function setVcEstado($vc_estado)
    {
        $this->vc_estado = $vc_estado;
    }

    /**
     * @return mixed
     */
    public function getDTel()
    {
        return $this->d_tel;
    }

    /**
     * @param mixed $d_tel
     */
    public function setDTel($d_tel)
    {
        $this->d_tel = $d_tel;
    }

    /**
     * @return mixed
     */
    public function getINumero()
    {
        return $this->i_numero;
    }

    /**
     * @param mixed $i_numero
     */
    public function setINumero($i_numero)
    {
        $this->i_numero = $i_numero;
    }


    /**
     * @return mixed
     */
    public function getVcApepat()
    {
        return $this->vc_apepat;
    }

    /**
     * @param mixed $vc_apepat
     */
    public function setVcApepat($vc_apepat)
    {
        $this->vc_apepat = $vc_apepat;
    }

    /**
     * @return mixed
     */
    public function getIPkIdFactura()
    {
        return $this->i_pk_idFactura;
    }

    /**
     * @param mixed $i_pk_idFactura
     */
    public function setIPkIdFactura($i_pk_idFactura)
    {
        $this->i_pk_idFactura = $i_pk_idFactura;
    }

    /**
     * @return mixed
     */
    public function getVcRfc()
    {
        return $this->vc_rfc;
    }

    /**
     * @param mixed $vc_rfc
     */
    public function setVcRfc($vc_rfc)
    {
        $this->vc_rfc = $vc_rfc;
    }

    /**
     * @return mixed
     */
    public function getVcNombre()
    {
        return $this->vc_nombre;
    }

    /**
     * @param mixed $vc_nombre
     */
    public function setVcNombre($vc_nombre)
    {
        $this->vc_nombre = $vc_nombre;
    }

    /**
     * @return mixed
     */
    public function getVcApemat()
    {
        return $this->vc_apemat;
    }

    /**
     * @param mixed $vc_apemat
     */
    public function setVcApemat($vc_apemat)
    {
        $this->vc_apemat = $vc_apemat;
    }

    /**
     * @return mixed
     */
    public function getVcCalle()
    {
        return $this->vc_calle;
    }

    /**
     * @param mixed $vc_calle
     */
    public function setVcCalle($vc_calle)
    {
        $this->vc_calle = $vc_calle;
    }

    /**
     * @return mixed
     */
    public function getDCodPostal()
    {
        return $this->d_codPostal;
    }

    /**
     * @param mixed $d_codPostal
     */
    public function setDCodPostal($d_codPostal)
    {
        $this->d_codPostal = $d_codPostal;
    }

    /**
     * @return mixed
     */
    public function getVcCiudad()
    {
        return $this->vc_ciudad;
    }

    /**
     * @param mixed $vc_ciudad
     */
    public function setVcCiudad($vc_ciudad)
    {
        $this->vc_ciudad = $vc_ciudad;
    }

    /**
     * @return mixed
     */
    public function getVcMail()
    {
        return $this->vc_mail;
    }

    /**
     * @param mixed $vc_mail
     */
    public function setVcMail($vc_mail)
    {
        $this->vc_mail = $vc_mail;
    }

    /**
     * @return mixed
     */
    public function getIFkIdTicket()
    {
        return $this->i_fk_idTicket;
    }

    /**
     * @param mixed $i_fk_idTicket
     */
    public function setIFkIdTicket($i_fk_idTicket)
    {
        $this->i_fk_idTicket = $i_fk_idTicket;
    }

    public function insertaFactura() {
        $arrayFactura = array(
            //'i_pk_idFactura' => $this->getIPkIdFactura(),
            'vc_rfc' => $this->getVcRfc(),
            'vc_nombre' => $this->getVcNombre(),
            'vc_apepat' => $this->getVcApepat(),
            'vc_apemat' => $this->getVcApemat(),
            'vc_calle' => $this->getVcCalle(),
            'i_numero' => $this->getINumero(),
            'd_codPostal' => $this->getDCodPostal(),
            'vc_ciudad' => $this->getVcCiudad(),
            'vc_estado' => $this->getVcEstado(),
            'vc_mail' => $this->getVcMail(),
            'd_tel' => $this->getDTel(),
            'i_fk_idTicket' => $this->getIFkIdTicket()
        );
        $this->db->insert('factura', $arrayFactura);
}
    public function selectFactura()
    {
        $this->db->select('i_pk_idFactura,vc_rfc,vc_nombre,vc_apepat,vc_apemat,vc_calle,i_numero,d_codPostal,vc_ciudad,vc_estado,vc_mail,d_tel,i_fk_idTicket');
        $this->db->from('nutricion.factura');
        $res = $this->db->get();
        return $res->result();
    }



}