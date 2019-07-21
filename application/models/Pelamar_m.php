<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pelamar_m
 *
 * @author Margarethanin
 */
class Pelamar_m extends CI_Model {

    //put your code here
    function insert_pelamar($data) {
        $this->db->insert('tb_pelamar', $data);
    }

    function select_pelamar() {
        $query = $this->db->query("Select*from tb_pelamar");
        return $query->result();
    }
//CODING UNTUK HAPUS DATA
    function hapus_pelamar($id_pelamar) {
        //delete from tb_admin where id_admin = '$id_admin'
        $this->db->where('id_pelamar', $id_pelamar);
        $this->db->delete('tb_pelamar');
    }
//CODING UNTUK EDIT DATA    
    function select_id_pelamar($id_pelamar){
        $query = $this->db->query("SELECT * FROM tb_pelamar where id_pelamar='$id_pelamar'");
        return $query->result();
    }
    
    function update_id_pelamar($data, $id_pelamar){
        $this->db->where('id_pelamar', $id_pelamar);
        $this->db->update('tb_pelamar', $data);
    }
    
    // UNTUK BERKAS
    function id_pelamar(){
        $q = $this->db->query("SELECT MAX(RIGHT(id_pelamar,4)) AS kd_max FROM tb_pelamar WHERE DATE(tanggal_input)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        return "TKI-" .date('ymd') . $kd;
    }
    
    function insert_berkas_dasar($data){
        $this->db->insert('tb_berkas_dasar', $data);
    }
    
     function insert_berkas_proses($data){
        $this->db->insert('tb_berkas_proses', $data);
    }
}
