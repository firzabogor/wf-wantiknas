<?php

class Auth_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like('email', $search); // Untuk menambahkan query where LIKE
        $this->db->or_like('name', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('role', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('active', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('phone', $search); // Untuk menambahkan query where OR LIKE
        $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
        $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
        return $this->db->get('users')->result_array(); // Eksekusi query sql sesuai kondisi diatas
    }

    public function count_all(){
        return $this->db->count_all('users'); // Untuk menghitung semua data siswa
    }

    public function count_filter($search){
        $this->db->like('email', $search); // Untuk menambahkan query where LIKE
        $this->db->or_like('name', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('role', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('active', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('phone', $search); // Untuk menambahkan query where OR LIKE
        return $this->db->get('users')->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
    }
}

?>