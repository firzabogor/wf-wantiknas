<?php

class Institution_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get($id){
        $this->db->where('id',$id);
        $data = $this->db->get('institution')->row();
        if($data){
            $callback = array(
                'data' => $data,
                'response' => 'success'
            );
        } else {
            $callback = array(
                'response' => 'failed'
            );
        }
        return $callback;
    }

    public function post(){
        $data=array(
            'name' => $this->input->post('name'),
            'type' => $this->input->post('type')
        );
        if($this->db->insert('institution', $data)){
            return "success";
        } else {
            return "failed";
        }
    }

    public function put($id){
        $data=array(
            'name' => $this->input->post('name'),
            'type' => $this->input->post('type')
        );
        $this->db->where('id',$id);
        if($this->db->update('institution', $data)){
            return "success";
        } else {
            return "failed";
        }
    }

    public function delete($id){
        $this->db->where('id',$id);
        if($this->db->delete('institution')){
            return "success";
        } else {
            return "failed";
        }
    }

    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like('name', $search);
        $this->db->like('type', $search);
        $this->db->order_by($order_field, $order_ascdesc);
        $this->db->limit($limit, $start);
        return $this->db->get('institution')->result_array();
    }

    public function count_all(){
        return $this->db->count_all('institution');
    }

    public function count_filter($search){
        $this->db->like('name', $search);
        $this->db->like('type', $search);
        return $this->db->get('institution')->num_rows();
    }

    public function select(){
        $json = [];
		if(!empty($this->input->get("q"))){
			$this->db->like('name', $this->input->get("q"));
			$query = $this->db->select('id,name as text')
						->limit(10)
						->get("institution");
			$json = $query->result();
        }
        return $json;
    }
}
?>