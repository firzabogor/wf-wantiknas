<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Occupation extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('occupation_model');
        $this->load->model('auth_model');
	}

	public function index(){
        $s_data = $this->auth_model->session();
        $this->load->view("layout/header");
        $this->load->view("layout/sidenav");
        $this->load->view("layout/topnav",$s_data);
        $this->load->view("occupation/index");
        $this->load->view("layout/footer");
    }
    
    public function form(){
    }

    public function update($id){
    }

    public function post(){
        $response = $this->occupation_model->post();
        echo $response;
    }

    public function get($id){
        $data = $this->occupation_model->get($id);
        //return $data;
        header('Content-Type: application/json');
		echo json_encode($data);
    }

    public function put($id){
        $response = $this->occupation_model->put($id);
        echo $response;
    }

    public function delete($id){
        $response = $this->occupation_model->delete($id);
        echo $response;
    }

	public function datatables(){
        $search = $_POST['search']['value'];
		$limit = $_POST['length'];
		$start = $_POST['start'];
		$order_index = $_POST['order'][0]['column'];
		$order_field = $_POST['columns'][$order_index]['data'];
		$order_ascdesc = $_POST['order'][0]['dir'];
		$sql_total = $this->occupation_model->count_all();
		$sql_data = $this->occupation_model->filter($search, $limit, $start, $order_field, $order_ascdesc);
		$sql_filter = $this->occupation_model->count_filter($search);
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
        $data = $this->occupation_model->select();
		echo json_encode($data);
    }
}
