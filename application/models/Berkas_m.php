<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Berkas_m
 *
 * @author Margarethanin
 */
class Berkas_m extends CI_Model{
    //put your code here
    function update_berkas_dasar_db($data, $id_pelamar){
        $this->db->where('id_pelamar', $id_pelamar);
        $this->db->update('tb_berkas_dasar', $data);
    }
    
    function update_berkas_proses_db($data, $id_pelamar){
        $this->db->where('id_pelamar', $id_pelamar);
        $this->db->update('tb_berkas_proses', $data);
    }
}
