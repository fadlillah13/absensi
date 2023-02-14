<?php
Class Monitoring_model extends CI_Model
{
  function Jum_absensi()
    {
        $this->db->group_by('id_user');
        $this->db->select('waktu');
        $this->db->select("count(*) as id_user");
        return $this->db->from('absensi')
          ->get()
          ->result();
    }
}
?>