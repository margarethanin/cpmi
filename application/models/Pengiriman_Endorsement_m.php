<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pengiriman_Endorsement_m
 *
 * @author Margarethanin
 */
class Pengiriman_Endorsement_m extends CI_Model {
    //put your code here
    function insert_pengiriman_endorsement($data){
        $this->db->insert('tb_pengiriman_endorsement',$data);
    }
    function select_pengiriman_endorsement(){
        $query = $this->db->query("Select*from tb_Pengiriman_Endorsement");
        return $query->result();
    }
}
