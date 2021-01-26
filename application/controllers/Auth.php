<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
	}
	
	public function list()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidenav');
		$this->load->view('layout/topnav');
		$this->load->view('auth/user');
		$this->load->view('layout/footer');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->db->where('email',$email);
		$user = $this->db->get('users')->row();
		if(password_verify($password,$user->password)){
			$data = array(
				'id'  => $user->id,
				'email'     => $use->email,
				'logged_in' => TRUE
			);
			$this->session->sess_expiration = '3600';
			$this->session->set_userdata($data);
			redirect("user");
		} else {
			die("Password is incorect!");
		}
	}

	function save(){ //function simpan data
        $data=array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
			'role' => $this->input->post('role'),
			'tribe' => $this->input->post('tribe'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        );
        $this->db->insert('users', $data);
    }
     
	function update($param){ //function update data
		$no=$param;
        $data=array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
			'role' => $this->input->post('role'),
			'tribe' => $this->input->post('tribe'),
			'active' => $this->input->post('active'),
        );
        $this->db->where('no',$no);
        $this->db->update('users', $data);
	}

	function change($param){ //function update data
		$no=$param;
        $data=array(
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        );
        $this->db->where('no',$no);
        $this->db->update('users', $data);
	}
	
	function get($param) { //data data produk by JSON object
		$no=$param;
		$this->db->where('no',$no);
		$data = $this->db->get('users')->result();
		header('Content-Type: application/json');
    	echo json_encode($data);
	}
     
    function delete($param){ //function hapus data
        $no=$param;
        $this->db->where('no',$no);
        $this->db->delete('users');
    }

	public function view(){
		$search = $_POST['search']['value']; // Ambil data yang di ketik user pada textbox pencarian
		$limit = $_POST['length']; // Ambil data limit per page
		$start = $_POST['start']; // Ambil data start
		$order_index = $_POST['order'][0]['column']; // Untuk mengambil index yg menjadi acuan untuk sorting
		$order_field = $_POST['columns'][$order_index]['data']; // Untuk mengambil nama field yg menjadi acuan untuk sorting
		$order_ascdesc = $_POST['order'][0]['dir']; // Untuk menentukan order by "ASC" atau "DESC"
		$sql_total = $this->auth_model->count_all(); // Panggil fungsi count_all pada SiswaModel
		$sql_data = $this->auth_model->filter($search, $limit, $start, $order_field, $order_ascdesc); // Panggil fungsi filter pada SiswaModel
		$sql_filter = $this->auth_model->count_filter($search); // Panggil fungsi count_filter pada SiswaModel
		$callback = array(
			'draw'=>$_POST['draw'], // Ini dari datatablenya
			'recordsTotal'=>$sql_total,
			'recordsFiltered'=>$sql_filter,
			'data'=>$sql_data
		);
		header('Content-Type: application/json');
		echo json_encode($callback); // Convert array $callback ke json
	  }
}
