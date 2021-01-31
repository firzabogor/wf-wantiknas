<?php

class User_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get($id){
        if($user = $this->db->where('id',$id)->get('users')->row()){
            $callback = array(
                'data' => $user,
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
            'email' => $this->input->post('email'),
            'name' => $this->input->post('name'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'phone' => $this->input->post('phone'),
            'role' => $this->input->post('role'),
            'tribe' => $this->input->post('tribe')
        );
        if($this->db->insert('users', $data)){
            return "success";
        } else {
            return "failed";
        }
    }

    public function put($id){
        $data=array(
            'email' => $this->input->post('email'),
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'role' => $this->input->post('role'),
            'tribe' => $this->input->post('tribe')
        );
        $this->db->where('id',$id);
        if($this->db->update('users', $data)){
            return "success";
        } else {
            return "failed";
        }
    }

    public function delete($id){
        $this->db->where('id',$id);
        if($this->db->delete('users')){
            return "success";
        } else {
            return "failed";
        }
    }

    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->like('email', $search);
        $this->db->or_like('name', $search);
        $this->db->or_like('phone', $search);
        $this->db->or_like('role', $search);
        $this->db->or_like('active', $search);
        $this->db->or_like('tribe', $search);
        $this->db->order_by($order_field, $order_ascdesc);
        $this->db->limit($limit, $start);
        return $this->db->get('users')->result_array();
    }

    public function count_all(){
        return $this->db->count_all('users');
    }

    public function count_filter($search){
        $this->db->like('email', $search);
        $this->db->or_like('name', $search);
        $this->db->or_like('phone', $search);
        $this->db->or_like('role', $search);
        $this->db->or_like('active', $search);
        $this->db->or_like('tribe', $search);
        return $this->db->get('users')->num_rows();
    }

    public function select(){
        $json = [];
		if(!empty($this->input->get("q"))){
			$this->db->like('name', $this->input->get("q"));
			$query = $this->db->select('id,name as text')
						->limit(10)
						->get("users");
			$json = $query->result();
        }
        return $json;
    }
}
?>