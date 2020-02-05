<?php
class M_admin extends CI_Model {

    // create data
    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
    }


    // update
    public function update($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // edit
    public function edit_data($table, $data)
    {
        return $this->db->get_where($table, $data);
    }


    // delete
    public function delete_data($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


    // read
    public function tampil_data($table)
    {
        return $this->db->get($table)->result();
    }

    public function data_mhs_fetch($npm)
    {
        return $this->db->query("SELECT * FROM mahasiswa WHERE npm = '" . $npm . "'")->result_array();
    }
    
}
