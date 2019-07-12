<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Perusahaan_m
 *
 * @author Margarethanin
 */
class Perusahaan_m extends CI_Model{
    //put your code here
    function insert_perusahaan($data){
        $this->db->insert('tb_perusahaan',$data);
    }
    function select_perusahaan(){
        $query = $this->db->query("Select*from tb_Perusahaan");
        return $query->result();
    }
    function hapus_perusahaan($id_perusahaan){
        //delete from tb_admin where id_admin = '$id_perusahaan'
        $this->db->where('id_perusahaan',$id_perusahaan);
        $this->db->delete('tb_perusahaan');
    }
    
    function select_id_perusahaan($id_perusahaan){
        $query = $this->db->query ("SELECT * FROM tb_perusahaan where id_perusahaan='$id_perusahaan'");
        return $query->result();
    }
}
