<?php

class Tribe_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get($id){
        $this->db->where('id',$id);
        $data = $this->db->get('tribes')->row();
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
            'responsibility' => $this->input->post('responsibility')
        );
        if($this->db->insert('tribes', $data)){
            return "success";
        } else {
            return "failed";
        }
    }

    public function put($id){
        $data=array(
            'name' => $this->input->post('name'),
            'responsibility' => $this->input->post('responsibility')
        );
        $this->db->where('id',$id);
        if($this->db->update('tribes', $data)){
            return "success";
        } else {
            return "failed";
        }
    }

    public function delete($id){
        $this->db->where('id',$id);
        if($this->db->delete('tribes')){
            return "success";
        } else {
            return "failed";
        }
    }

    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like('name', $search);
        $this->db->like('responsibility', $search);
        $this->db->order_by($order_field, $order_ascdesc);
        $this->db->limit($limit, $start);
        return $this->db->get('tribes')->result_array();
    }

    public function count_all(){
        return $this->db->count_all('tribes');
    }

    public function count_filter($search){
        $this->db->like('name', $search);
        $this->db->like('responsibility', $search);
        return $this->db->get('tribes')->num_rows();
    }

    public function select(){
        $query = $this->db->select('id,name as text')->get("tribes")->result_array();
        return $query;
    }

    /*
    public function select(){
        $json = [];
		if(!empty($this->input->get("q"))){
			$this->db->like('name', $this->input->get("q"));
			$query = $this->db->select('id,name as text')
						->limit(10)
						->get("tribes");
			$json = $query->result();
        }
        return $json;
    }
    */
}
?>