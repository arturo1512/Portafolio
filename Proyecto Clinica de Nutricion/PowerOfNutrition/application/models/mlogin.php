<?php

/**
 * Created by PhpStorm.
 * User: Ernesto
 * Date: 04/03/2018
 * Time: 07:14 PM
 */
class mlogin extends CI_Model {


   public function ingresar($us, $pas) {
      //			$this->db->select('vc_user, vc_password');
      //			$this->db->from('nutricion.usuario');
      //			$this->db->where('vc_user', $us);
      //			$this->db->where('vc_password', $pas);

      $this->db->select('u.vc_user, u.vc_password, e.vc_nombre, e.vc_apePatern, e.vc_apeMat');
      $this->db->from('usuario u');
      $this->db->join('empleado e', 'e.i_pk_num_emp = u.i_pk_idUser');
      $this->db->where('u.vc_user', $us);
      $this->db->where('u.vc_password', $pas);

      $resultado = $this->db->get();

      $this->db->select('u.vc_user, g.vc_Tipo');
      $this->db->from('usergrup usg');
      $this->db->join('grupo g', 'usg.i_pk_Grupo = g.i_pk_Grupo');
      $this->db->join('usuario u', 'usg.i_pk_idUser = u.i_pk_idUser');
      $this->db->where('vc_user', $us);

      $resTipGrupo = $this->db->get();

      if ($resultado->num_rows() == 1) {
         $r = $resultado->row();
         $s_r = array(
            'vc_nombre' => $r->vc_nombre,
            'vc_apePatern' => $r->vc_apePatern,
            'vc_apeMat' => $r->vc_apeMat
         );
         $re = $resTipGrupo->row();
         $s_res = array(
            'vc_user' => $re->vc_user,
            'vc_Tipo' => $re->vc_Tipo
         );
         $this->session->set_userdata('tipoGrupo', $s_res['vc_Tipo']);
         $this->session->set_userdata('puroNom', $s_r['vc_nombre']);
         $this->session->set_userdata('nomUsuario', $s_r['vc_nombre'].' '.$s_r['vc_apePatern'].' '.$s_r['vc_apeMat']);

         return 1;
      } else {
         return 0;
      }
   }

   public function appGrupo($nomApp, $nomGrup) {
      $this->db->select('a.vc_name, g.vc_Tipo, ap.bool_activo');
      $this->db->from('aplicacion_has_grupo ap');
      $this->db->join('aplicacion a', 'a.i_pk_aplicacion = ap.i_pk_aplicacion');
      $this->db->join('grupo g', 'g.i_pk_Grupo = ap.i_pk_Grupo');
      $this->db->where('vc_name', $nomApp);
      $this->db->where('vc_Tipo', $nomGrup);

      $query = $this->db->get();
      if ($query->num_rows() == 1) {
         $resultado = $query->row();
         return $resultado->bool_activo;
      }
   }


}
