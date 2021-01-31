<?php

class Auth_Model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function login(){
        $email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->db->where('email',$email);
		$user = $this->db->get('users')->row();
		if(password_verify($password,$user->password)){
			$data = array(
                'id' => $user->id,
                'name' => $user->name,
				'email' => $user->email,
                'role' => $user->role,
                'tribe' => $user->tribe
			);
			$this->session->sess_expiration = '3600';
			$this->session->set_userdata($data);
			return "success";
		} else {
			return "failed";
		}
    }

    public function session(){
        $data = array(
            'session_id' => $this->session->userdata('id'),
            'session_name' => $this->session->userdata('name'),
            'session_email' => $this->session->userdata('email'),
            'session_role' => $this->session->userdata('role'),
            'session_tribe' => $this->session->userdata('tribe')
        );
        return $data;
    }

    public function change_password($id){
        $data = array(
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        );
        $this->db->where('id',$id);
        if($this->db->update('users', $data)){
            return "success";
        } else {
            return "failed";
        }
    }

    public function logout(){
        if(session_destroy()){
            return "success";
        } else {
            return "failed";
        }
    }
}

?>