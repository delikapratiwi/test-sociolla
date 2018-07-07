<?php
Class Main_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function insert($tbl, $data)
    {
        $this->db->insert($tbl, $data);
    }

    function update($tbl, $data, $id)
    {
        $this->db->where($id);
        $this->db->update($tbl, $data);
    }

    function getAllData()
    {
        $this->db->select('*');
        $this->db->from('thread');
        return $this->db->get();
    }

    function get_thread_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('thread');
        $this->db->where('ID', $id);
        return $this->db->get();
    }

    function get_data()
    {
        $this->db->select('*');
        $this->db->from('nama_diklat as a');
        $this->db->join('kategori_diklat as b', 'b.id_training_category = a.id_training_category', 'inner');
        $this->db->join('jadwal_diklat as c', 'c.id_training = a.id_training', 'inner');
        return $this->db->get()->result();
    }

   
}

?>
