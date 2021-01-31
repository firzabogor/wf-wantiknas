<?php

class Speaker_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get($id){
        $this->db->where('id',$id);
        $data = $this->db->get('speakers')->row();
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
            'email' => $this->input->post('email'),
            'institution' => $this->input->post('institution'),
            'occupation' => $this->input->post('occupation'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'picture' => $this->input->post('picture'),
            'ktp' => $this->input->post('ktp'),
            'npwp' => $this->input->post('npwp'),
            'nip' => $this->input->post('nip'),
            'an' => $this->input->post('an'),
            'bank' => $this->input->post('bank'),
            'number' => $this->input->post('number'),
            'cv' => $this->input->post('cv')
        );
        if($this->db->insert('speakers', $data)){
            return "success";
        } else {
            return "failed";
        }
    }

    public function put($id){
        $data=array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'institution' => $this->input->post('institution'),
            'occupation' => $this->input->post('occupation'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'picture' => $this->input->post('picture'),
            'ktp' => $this->input->post('ktp'),
            'npwp' => $this->input->post('npwp'),
            'nip' => $this->input->post('nip'),
            'an' => $this->input->post('an'),
            'bank' => $this->input->post('bank'),
            'number' => $this->input->post('number'),
            'cv' => $this->input->post('cv')
        );
        $this->db->where('id',$id);
        if($this->db->update('speakers', $data)){
            return "success";
        } else {
            return "failed";
        }
    }

    public function delete($id){
        $this->db->where('id',$id);
        if($this->db->delete('speakers')){
            return "success";
        } else {
            return "failed";
        }
    }

    public function filter($search, $limit, $start, $order_field, $order_ascdesc){
        $this->db->select('a.id, a.name, a.email, b.name as institution, c.name as occupation, a.phone, a.ktp, a.npwp, a.nip, a.an, d.name as bank, a.number');
        $this->db->from('speakers as a');
        $this->db->join('institution as b', 'b.id = a.institution','left');
        $this->db->join('occupation as c', 'c.id = a.occupation','left');
        $this->db->join('bank as d', 'd.id = a.bank','left');
        $this->db->like('a.name', $search);
        $this->db->or_like('a.email', $search);
        $this->db->or_like('b.name', $search);
        $this->db->or_like('c.name', $search);
        $this->db->or_like('a.phone', $search);
        $this->db->or_like('a.ktp', $search);
        $this->db->or_like('a.npwp', $search);
        $this->db->or_like('a.nip', $search);
        $this->db->or_like('a.an', $search);
        $this->db->or_like('d.name', $search);
        $this->db->or_like('a.number', $search);
        $this->db->order_by($order_field, $order_ascdesc);
        $this->db->limit($limit, $start);
        $data = $this->db->get();
        return $data->result_array();
    }

    public function count_all(){
        return $this->db->count_all('speakers');
    }

    public function count_filter($search){
        $this->db->select('a.id, a.name, a.email, b.name as institution, c.name as occupation, a.phone, a.ktp, a.npwp, a.nip, a.an, d.name as bank, a.number');
        $this->db->from('speakers as a');
        $this->db->join('institution as b', 'b.id = a.institution','left');
        $this->db->join('occupation as c', 'c.id = a.occupation','left');
        $this->db->join('bank as d', 'd.id = a.bank','left');
        $this->db->like('a.name', $search);
        $this->db->or_like('a.email', $search);
        $this->db->or_like('b.name', $search);
        $this->db->or_like('c.name', $search);
        $this->db->or_like('a.phone', $search);
        $this->db->or_like('a.ktp', $search);
        $this->db->or_like('a.npwp', $search);
        $this->db->or_like('a.nip', $search);
        $this->db->or_like('a.an', $search);
        $this->db->or_like('d.name', $search);
        $this->db->or_like('a.number', $search);
        $data = $this->db->get();
        return $data->num_rows();
    }

    public function select(){
        $json = [];
		if(!empty($this->input->get("q"))){
			$this->db->like('name', $this->input->get("q"));
			$query = $this->db->select('id,name as text')
						->limit(10)
						->get("speakers");
			$json = $query->result();
        }
        return $json;
    }
}
?>