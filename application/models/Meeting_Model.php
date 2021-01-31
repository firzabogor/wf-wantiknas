<?php

class Meeting_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function get($id){
        $this->db->where('id',$id);
        $data = $this->db->get('meeting')->row();
        $tag = $this->db->select('b.id, b.name as text')->from('meeting_tag a')->join('tags as b', 'a.tag = b.id', 'left')->where('a.meeting', $id)->get()->result();
        $speaker = $this->db->select('b.id, b.name as text')->from('meeting_speaker a')->join('speakers as b', 'a.speaker = b.id', 'left')->where('a.meeting', $id)->get()->result();
        $assignment = $this->db->select('b.id, b.name as text')->from('meeting_user a')->join('users as b', 'a.user = b.id', 'left')->where('a.meeting', $id)->get()->result();
        $data->tag = $tag;
        $data->speaker = $speaker;
        $data->assignment = $assignment;
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
            'agenda' => $this->input->post('agenda'),
            'location' => $this->input->post('location'),
            'link' => $this->input->post('link'),
            'host' => $this->input->post('host'),
            'ds' => $this->input->post('ds'),
            'de' => $this->input->post('de'),
            'at' => $this->input->post('at'),
            'time' => $this->input->post('time'),
            'tribe' => $this->input->post('tribe'),
            'mt' => $this->input->post('mt'),
            'mc' => $this->input->post('mc'),
            'at' => $this->input->post('parent'),
            'moderator' => $this->input->post('moderator'),
            'chairman' => $this->input->post('chairman'),
            'parent' => $this->input->post('parent')
        );
        if($this->db->insert('meeting', $data)){
            $meeting = $this->db->insert_id();
            $tag = $this->input->post('tag');
            $speaker = $this->input->post('speaker');
            $assignment = $this->input->post('assignment');
            foreach ($tag as $value) {
                $tag = $this->db->select('id')->where('id',$value)->get("tags")->row();
                if(is_null($tag)){
                    $data = array(
                        'name' => $value
                    );
                    $this->db->insert('tags', $data);
                    $tag = $this->db->insert_id();
                    $data = array(
                        'meeting' => $meeting,
                        'tag' => $tag 
                    );
                    $this->db->insert('meeting_tag', $data);
                } else {
                    $data = array(
                        'meeting' => $meeting,
                        'tag' => $value
                    );
                    $this->db->insert('meeting_tag', $data);
                }
            }
            foreach ($speaker as $value) {
                $data= array(
                    'meeting' => $meeting,
                    'speaker' => $value
                );
                $this->db->insert('meeting_speaker', $data);
            }
            foreach ($assignment as $value) {
                $data= array(
                    'meeting' => $meeting,
                    'user' => $value
                );
                $this->db->insert('meeting_user', $data);
            }
            return "success";
        } else {
            return "failed";
        }
    }

    public function put($id){
        $data=array(
            'name' => $this->input->post('name'),
            'agenda' => $this->input->post('agenda'),
            'location' => $this->input->post('location'),
            'link' => $this->input->post('link'),
            'host' => $this->input->post('host'),
            'ds' => $this->input->post('ds'),
            'de' => $this->input->post('de'),
            'at' => $this->input->post('at'),
            'time' => $this->input->post('time'),
            'tribe' => $this->input->post('tribe'),
            'mt' => $this->input->post('mt'),
            'mc' => $this->input->post('mc'),
            'at' => $this->input->post('parent'),
            'moderator' => $this->input->post('moderator'),
            'chairman' => $this->input->post('chairman'),
            'parent' => $this->input->post('parent')
        );
        $this->db->where('id',$id);
        if($this->db->update('meeting', $data)){
            //$meeting_tag = $this->db->where('meeting',$id)->get('meeting_tag')->result_array();
            //$tag = $this->input->post('tag');
            $tag = $this->input->post('tag');
            $speaker = $this->input->post('speaker');
            $assignment = $this->input->post('assignment');

            if($this->db->where('meeting',$id)->delete('meeting_tag')){
                foreach ($tag as $value) {
                    $tag = $this->db->select('id')->where('id',$value)->get("tags")->row();
                    if(is_null($tag)){
                        $data = array(
                            'name' => $value
                        );
                        $this->db->insert('tags', $data);
                        $tag = $this->db->insert_id();
                        $data = array(
                            'meeting' => $id,
                            'tag' => $tag 
                        );
                        $this->db->insert('meeting_tag', $data);
                    } else {
                        $data = array(
                            'meeting' => $id,
                            'tag' => $value
                        );
                        $this->db->insert('meeting_tag', $data);
                    }
                }
            }
            
            //$meeting_speaker = $this->db->where('meeting',$id)->get('meeting_speaker')->result_array();
            //$speaker = $this->input->post('speaker');
            if($this->db->where('meeting',$id)->delete('meeting_speaker')){
                foreach ($speaker as $value) {
                    $data= array(
                        'meeting' => $id,
                        'speaker' => $value
                    );
                    $this->db->insert('meeting_speaker', $data);
                }
            }
            
            //$meeting_user = $this->db->where('meeting',$id)->get('meeting_user')->result_array();
            //$assignment = $this->input->post('assignment');
            if($this->db->where('meeting',$id)->delete('meeting_user')){
                foreach ($assignment as $value) {
                    $data= array(
                        'meeting' => $id,
                        'user' => $value
                    );
                    $this->db->insert('meeting_user', $data);
                }
            }
            return "success";
        } else {
            return "failed";
        }
    }

    public function delete($id){
        $this->db->where('id',$id);
        if($this->db->delete('meeting')){
            $this->db->where('meeting',$id)->delete('meeting_tag');
            $this->db->where('meeting',$id)->delete('meeting_speaker');
            $this->db->where('meeting',$id)->delete('meeting_user');
            return "success";
        } else {
            return "failed";
        }
    }

    public function filter($search, $limit, $start, $order_field, $order_ascdesc, $keyword, $condition){
        $keyword = "a.".$keyword;
        if($condition == "internal"){
            $where = '('.$keyword.' <= 5)';
        } else if($condition == "eksternal"){
            $where = '('.$keyword.' > 5)';
        } else {
            $where = '('.$keyword.' = '.$condition.')';
        }
        $this->db->select('a.id, a.name, a.agenda, a.location, a.link, a.host, a.ds, a.de, a.time, a.tribe, a.mt, a.mc, a.at, b.name as parent, a.moderator, a.chairman');
        $this->db->from('meeting a');
        $this->db->join('meeting as b', 'a.parent = b.id','left');
        $this->db->where($where);
        $this->db->group_start();
        $this->db->like('a.name', $search);
        $this->db->or_like('a.agenda', $search);
        $this->db->or_like('a.location', $search);
        $this->db->or_like('a.link', $search);
        $this->db->or_like('a.host', $search);
        $this->db->or_like('a.ds', $search); //Date Start
        $this->db->or_like('a.de', $search); //Date End
        $this->db->or_like('a.time', $search); //Time Start
        $this->db->or_like('a.tribe', $search);
        $this->db->or_like('a.mt', $search); //Meeting Type
        $this->db->or_like('a.mc', $search); //Meeting Category
        $this->db->or_like('a.at', $search); //Agenda Type
        $this->db->or_like('b.name', $search); //Main Agenda
        $this->db->or_like('a.moderator', $search);
        $this->db->or_like('a.chairman', $search);
        $this->db->group_end();
        $this->db->order_by($order_field, $order_ascdesc);
        $this->db->limit($limit, $start);
        $data = $this->db->get();
        return $data->result_array();
    }

    public function count_all(){
        return $this->db->count_all('meeting');
    }

    public function count_filter($search, $keyword, $condition){
        $keyword = "a.".$keyword;
        if($condition == "internal"){
            $where = '('.$keyword.' <= 5)';
        } else if($condition == "eksternal"){
            $where = '('.$keyword.' > 5)';
        } else {
            $where = '('.$keyword.' = '.$condition.')';
        }
        $this->db->select('a.id, a.name, a.agenda, a.location, a.link, a.host, a.ds, a.de, a.time, a.tribe, a.mt, a.mc, a.at, b.name as parent, a.moderator, a.chairman');
        $this->db->from('meeting a');
        $this->db->join('meeting as b', 'a.parent = b.id','left');
        $this->db->where($where);
        $this->db->group_start();
        $this->db->like('a.name', $search);
        $this->db->or_like('a.agenda', $search);
        $this->db->or_like('a.location', $search);
        $this->db->or_like('a.link', $search);
        $this->db->or_like('a.host', $search);
        $this->db->or_like('a.ds', $search); //Date Start
        $this->db->or_like('a.de', $search); //Date End
        $this->db->or_like('a.time', $search); //Time Start
        $this->db->or_like('a.tribe', $search);
        $this->db->or_like('a.mt', $search); //Meeting Type
        $this->db->or_like('a.mc', $search); //Meeting Category
        $this->db->or_like('a.at', $search); //Agenda Type
        $this->db->or_like('b.name', $search); //Main Agenda
        $this->db->or_like('a.moderator', $search);
        $this->db->or_like('a.chairman', $search);
        $this->db->group_end();
        $data = $this->db->get();
        return $data->num_rows();
    }

    public function select(){
        $json = [];
		if(!empty($this->input->get("q"))){
			$this->db->like('name', $this->input->get("q"));
			$query = $this->db->select('id,name as text')
						->limit(10)
						->get("meeting");
			$json = $query->result();
        }
        return $json;
    }
}
?>