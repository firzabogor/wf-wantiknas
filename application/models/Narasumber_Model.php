<?php

class Narasumber_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like('nama', $search); // Untuk menambahkan query where LIKE
        $this->db->or_like('telepon', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('email', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('foto', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('deskripsi', $search); // Untuk menambahkan query where OR LIKE
        $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
        $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
        return $this->db->get('narasumber')->result_array(); // Eksekusi query sql sesuai kondisi diatas
    }

    public function count_all(){
        return $this->db->count_all('narasumber'); // Untuk menghitung semua data siswa
    }

    public function count_filter($search){
        $this->db->like('nama', $search); // Untuk menambahkan query where LIKE
        $this->db->or_like('telepon', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('email', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('foto', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('deskripsi', $search); // Untuk menambahkan query where OR LIKE
        return $this->db->get('narasumber')->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
    }
}

?>