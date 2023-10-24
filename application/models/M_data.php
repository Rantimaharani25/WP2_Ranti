<?php
class M_data extends CI_model {

    function input_data ($data,$table) {
        $this->db->insert($table,$data);

    }

    function tampil_data() {
        return $this->db->get ('mahasiswa');
    }

    function edit_data($where,$table){
        return $this->db->get_where($table,$where);

    }
    function get_data_by_id($where, $table) {
        return $this->db->get_where($table, $where)->row();
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}


