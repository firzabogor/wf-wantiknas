<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meeting extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('meeting_model');
        $this->load->model('auth_model');
    }

	public function index($type = null){
        if($type == 'internal'){
            $text = array('text' => 'internal');
        } else if($type == 'eksternal') {
            $text = array('text' => 'eksternal');
        } else {
            redirect(base_url('meeting'));
        }
        $this->fragment('meeting','index', $text);
    }
    
    public function form($type = null){
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('agenda', 'Agenda', 'required');
        $this->form_validation->set_rules('tribe', 'Tribe', 'required');
        //$this->form_validation->set_rules('tag', 'Tag', 'required');
        $this->form_validation->set_rules('mt', 'Tipe Meeting', 'required');
        $this->form_validation->set_rules('mc', 'Kategori Meeting', 'required');
        $this->form_validation->set_rules('ds', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('time', 'Pukul', 'required');
        $text = array('text' => $type);
        if($type == 'internal'){
            $this->form_validation->set_rules('chairman', 'Chairman', 'required');
            $this->form_validation->set_rules('moderator', 'Moderator', 'required');
            //$this->form_validation->set_rules('narasumber', 'Narasumber', 'required');
            $this->form_validation->set_rules('at', 'Tipe Agenda', 'required');
        } else if($type == 'eksternal'){
            $this->form_validation->set_rules('host', 'Host', 'required');
            //$this->form_validation->set_rules('assignment', 'Penugasan', 'required');
        } else {
            redirect(base_url('meeting'));
        }

        if($this->form_validation->run() === false){
            $this->fragment('meeting','form', $text);
        } else {
            if($this->post() == 'success'){
                redirect(base_url('meeting/'.$type));
            }
        }
    }

    public function update($type = null,$id){
        if($this->get($id)['response'] == 'success'){
            $data = (array) $this->get($id)['data'];
        } else {
            redirect(base_url('meeting/'.$type));
        }
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('agenda', 'Agenda', 'required');
        $this->form_validation->set_rules('tribe', 'Tribe', 'required');
        //$this->form_validation->set_rules('tag', 'Tag', 'required');
        $this->form_validation->set_rules('mt', 'Tipe Meeting', 'required');
        $this->form_validation->set_rules('mc', 'Kategori Meeting', 'required');
        $this->form_validation->set_rules('ds', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('time', 'Pukul', 'required');
        $text = array('text' => $type);
        if($type == 'internal'){
            $this->form_validation->set_rules('chairman', 'Chairman', 'required');
            $this->form_validation->set_rules('moderator', 'Moderator', 'required');
            //$this->form_validation->set_rules('narasumber', 'Narasumber', 'required');
            $this->form_validation->set_rules('at', 'Tipe Agenda', 'required');
        } else if($type == 'eksternal'){
            $this->form_validation->set_rules('host', 'Host', 'required');
            //$this->form_validation->set_rules('assignment', 'Penugasan', 'required');
        } else {
            redirect(base_url('meeting'));
        }

        if($this->form_validation->run() === false){
            $param = array_merge($data, $text);
            $this->fragment('meeting','form', $param);
        } else {
            if($this->put($id) == 'success'){
                redirect(base_url('meeting/'.$type));
            }
        }
    }

    public function post(){
        $response = $this->meeting_model->post();
        return $response;
    }

    public function get($id, $print = null){
        $data = $this->meeting_model->get($id);
        if($print == 'ajax'){
            header('Content-Type: application/json');
		    echo json_encode($data);
        } else {
            return $data;
        }
    }

    public function put($id){
        $response = $this->meeting_model->put($id);
        return $response;
    }

    public function delete($id){
        $response = $this->meeting_model->delete($id);
        echo $response;
    }

	public function datatables($keyword, $condition){
        $search = $_POST['search']['value'];
		$limit = $_POST['length'];
		$start = $_POST['start'];
		$order_index = $_POST['order'][0]['column'];
		$order_field = $_POST['columns'][$order_index]['data'];
		$order_ascdesc = $_POST['order'][0]['dir'];
		$sql_total = $this->meeting_model->count_all();
		$sql_data = $this->meeting_model->filter($search, $limit, $start, $order_field, $order_ascdesc, $keyword, $condition);
		$sql_filter = $this->meeting_model->count_filter($search, $keyword, $condition);
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
        $data = $this->meeting_model->select();
		echo json_encode($data);
    }

    public function fragment($slug, $type='', $param = array()){
        $session = $this->auth_model->session();
        $data = array_merge($param,$session);
        $this->load->view("layout/header");
        $this->load->view("layout/sidenav",$data);
        $this->load->view("layout/topnav",$data);
        $this->load->view($slug."/".$type,$data);
        $this->load->view("layout/footer");
    }
}
