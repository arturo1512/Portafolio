<?php
/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 29/03/2018
 * Time: 04:01 AM
 */

class mUserGrup extends CI_Model
{
    public function insertarUserGrup($grup)
    {
        $this->db->insert('usergrup', $grup);
    }

}