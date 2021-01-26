<?php

class Kegiatan_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like('tipe_agenda', $search); // Untuk menambahkan query where LIKE
        $this->db->or_like('nama_kegiatan', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('tipe_meeting', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('kategori_meeting', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('tanggal', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('pukul', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('tempat', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('link_meeting', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('agenda', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('pimpinan_rapat', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('moderator', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('tribe', $search); // Untuk menambahkan query where OR LIKE
        $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
        $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
        return $this->db->get('kegiatan')->result_array(); // Eksekusi query sql sesuai kondisi diatas
    }

    public function count_all(){
        return $this->db->count_all('kegiatan'); // Untuk menghitung semua data siswa
    }

    public function count_filter($search){
        $this->db->like('tipe_agenda', $search); // Untuk menambahkan query where LIKE
        $this->db->or_like('nama_kegiatan', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('tipe_meeting', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('kategori_meeting', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('tanggal', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('pukul', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('tempat', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('link_meeting', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('agenda', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('pimpinan_rapat', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('moderator', $search); // Untuk menambahkan query where OR LIKE
        $this->db->or_like('tribe', $search); // Untuk menambahkan query where OR LIKE
        return $this->db->get('kegiatan')->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian
    }
}

?>