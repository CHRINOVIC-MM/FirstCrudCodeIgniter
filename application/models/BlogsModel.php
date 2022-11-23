<?php

class BlogsModel extends CI_Model
{
    public function get_blogs(){
        $query = $this->db->get('blogs');
        return $query->result();
    }
}
