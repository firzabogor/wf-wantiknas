<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('bank_model');
        $this->load->model('auth_model');
	}

	public function index(){
        $s_data = $this->auth_model->session();
        $this->load->view("layout/header");
        $this->load->view("layout/sidenav");
        $this->load->view("layout/topnav",$s_data);
        $this->load->view("bank/index");
        $this->load->view("layout/footer");
    }
    
    public function form(){
    }

    public function update($id){
    }

    public function post(){
        $response = $this->bank_model->post();
        echo $response;
    }

    public function get($id){
        $data = $this->bank_model->get($id);
        //return $data;
        header('Content-Type: application/json');
		echo json_encode($data);
    }

    public function put($id){
        $response = $this->bank_model->put($id);
        echo $response;
    }

    public function delete($id){
        $response = $this->bank_model->delete($id);
        echo $response;
    }

	public function datatables(){
        $search = $_POST['search']['value'];
		$limit = $_POST['length'];
		$start = $_POST['start'];
		$order_index = $_POST['order'][0]['column'];
		$order_field = $_POST['columns'][$order_index]['data'];
		$order_ascdesc = $_POST['order'][0]['dir'];
		$sql_total = $this->bank_model->count_all();
		$sql_data = $this->bank_model->filter($search, $limit, $start, $order_field, $order_ascdesc);
		$sql_filter = $this->bank_model->count_filter($search);
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
        $data = $this->bank_model->select();
		echo json_encode($data);
    }
}
