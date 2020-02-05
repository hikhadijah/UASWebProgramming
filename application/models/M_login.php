<?php
class M_login extends CI_Model
{
    public function ceklogin($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function getDataAdmin($username)
    {
        return $this->db->query('SELECT nama FROM admin WHERE username = '.$username)->result();
    }
}
