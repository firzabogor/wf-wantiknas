<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Speaker extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('speaker_model');
        $this->load->model('auth_model');
	}

	public function index(){
        $s_data = $this->auth_model->session();
        $this->load->view("layout/header");
        $this->load->view("layout/sidenav");
        $this->load->view("layout/topnav",$s_data);
        $this->load->view("speaker/index");
        $this->load->view("layout/footer");
    }
    
    public function form(){
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('occupation', 'Jabatan', 'required');
        $this->form_validation->set_rules('institution', 'Instansi', 'required');
        $this->form_validation->set_rules('picture', 'Link Foto', 'required');
        $this->form_validation->set_rules('cv', 'Link CV', 'required');
        $this->form_validation->set_rules('an', 'Nama Pada Rekening', 'required');
        $this->form_validation->set_rules('bank', 'Bank', 'required');
        $this->form_validation->set_rules('number', 'No.Rekening', 'required');
        $this->form_validation->set_rules('ktp', 'KTP', 'required');
        $this->form_validation->set_rules('npwp', 'NPWP', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        if($this->form_validation->run() === false){
            $s_data = $this->auth_model->session();
            $this->load->view("layout/header");
            $this->load->view("layout/sidenav");
            $this->load->view("layout/topnav",$s_data);
            $this->load->view("speaker/form");
            $this->load->view("layout/footer");
        } else {
            if($this->post() == 'success'){
                redirect(base_url('narasumber'));
            }
        }
    }

    public function update($id){
        if($this->get($id)['response'] == 'success'){
            $data = $this->get($id)['data'];
        } else {
            redirect(base_url('narasumber'));
        }
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('occupation', 'Jabatan', 'required');
        $this->form_validation->set_rules('institution', 'Instansi', 'required');
        $this->form_validation->set_rules('picture', 'Link Foto', 'required');
        $this->form_validation->set_rules('cv', 'Link CV', 'required');
        $this->form_validation->set_rules('an', 'Nama Pada Rekening', 'required');
        $this->form_validation->set_rules('bank', 'Bank', 'required');
        $this->form_validation->set_rules('number', 'No.Rekening', 'required');
        $this->form_validation->set_rules('ktp', 'KTP', 'required');
        $this->form_validation->set_rules('npwp', 'NPWP', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        if($this->form_validation->run() === false){
            $s_data = $this->auth_model->session();
            $this->load->view("layout/header");
            $this->load->view("layout/sidenav");
            $this->load->view("layout/topnav",$s_data);
            $this->load->view("speaker/form",$data);
            $this->load->view("layout/footer");
        } else {
            if($this->put($id) == 'success'){
                redirect(base_url('narasumber'));
            }
        }
    }

    public function post(){
        $response = $this->speaker_model->post();
        return $response;
    }

    public function get($id){
        $data = $this->speaker_model->get($id);
        return $data;
        //header('Content-Type: application/json');
		//echo json_encode($data);
    }

    public function put($id){
        $response = $this->speaker_model->put($id);
        return $response;
    }

    public function delete($id){
        $response = $this->speaker_model->delete($id);
        echo $response;
    }

	public function datatables(){
        $search = $_POST['search']['value'];
		$limit = $_POST['length'];
		$start = $_POST['start'];
		$order_index = $_POST['order'][0]['column'];
		$order_field = $_POST['columns'][$order_index]['data'];
		$order_ascdesc = $_POST['order'][0]['dir'];
		$sql_total = $this->speaker_model->count_all();
		$sql_data = $this->speaker_model->filter($search, $limit, $start, $order_field, $order_ascdesc);
		$sql_filter = $this->speaker_model->count_filter($search);
		$callback = array(
			'draw'=>$_POST['draw'],
			'recordsTotal'=>$sql_total,
			'recordsFiltered'=>$sql_filter,
			'data'=>$sql_data
		);
		header('Content-Type: application/json');
		echo json_encode($callback);
	}
	
	public function select(){
        $data = $this->speaker_model->select();
		echo json_encode($data);
    }
}
