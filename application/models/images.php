<?php

class Images extends CI_Model{
    function _construct()
    {
        parent::_construct();
    }
    
    function all()
    {
        $this->db->order_by("id", "acs");
        $query = $this->db->get('images');
        return $query->result_array();
    }
    
    function newest(){
        $this->db->order_by("id", "desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query->result_array();
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */