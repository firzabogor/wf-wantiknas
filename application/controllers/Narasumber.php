<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Narasumber extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('narasumber_model');
	}
	
	public function list()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidenav');
		$this->load->view('layout/topnav');
		$this->load->view('narasumber/index');
		$this->load->view('layout/footer');
    }
    
    public function save()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidenav');
		$this->load->view('layout/topnav');
		$this->load->view('narasumber/save');
		$this->load->view('layout/footer');
    }

    public function update($param)
	{
		$no=$param;
		$this->db->where('no',$no);
		$data = $this->db->get('narasumber')->row();
		$this->load->view('layout/header');
		$this->load->view('layout/sidenav');
		$this->load->view('layout/topnav');
		$this->load->view('narasumber/update', $data);
		$this->load->view('layout/footer');
    }

    public function insert()
    {
        $data=array(
            'nama' => $this->input->post('nama'),
            'foto' => $this->input->post('foto'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        if($this->db->insert('narasumber', $data)){
            redirect("kegiatan");
        }
	}
	
	function change($param){ //function update data
		$no=$param;
        $data=array(
            'nama' => $this->input->post('nama'),
            'foto' => $this->input->post('foto'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        $this->db->where('no',$no);
        if($this->db->update('narasumber', $data)){
			redirect("narasumber");
		}
	}

    public function view(){
		$search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
		$limit = $_POST['length']; // Ambil data limit per page
		$start = $_POST['start']; // Ambil data start
		$order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
		$order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
		$order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"
		$sql_total = $this->narasumber_model->count_all(); // Panggil fungsi count_all pada SiswaModel
		$sql_data = $this->narasumber_model->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
		$sql_filter = $this->narasumber_model->count_filter($search); // Panggil fungsi count_filter pada SiswaModel
		$callback = array(
			'draw'=>$_POST['draw'], // Ini dari datatablenya
			'recordsTotal'=>$sql_total,
			'recordsFiltered'=>$sql_filter,
			'data'=>$sql_data
		);
		header('Content-Type: application/json');
		echo json_encode($callback); // Convert array $callback ke json
	}
	  
	public function select(){
	$json = [];
	$this->load->database();
	if(!empty($this->input->get("q"))){
		$this->db->like('nama', $this->input->get("q"));
		$query = $this->db->select('no as id,nama as text')
					->limit(10)
					->get("narasumber");
		$json = $query->result();
	}
	echo json_encode($json);
	}
	
	function delete($param){ //function hapus data
	$no=$param;
	$this->db->where('no',$no);
	$this->db->delete('narasumber');
}
}
