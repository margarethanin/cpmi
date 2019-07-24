<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pendaftar_m
 *
 * @author Margarethanin
 */
class Pendaftar_m extends CI_Model{
    //put your code here
    function insert_pendaftar($data) {
        $this->db->insert('tb_pendaftar_lowongan', $data);
    }
        // <------------------------menampilkan data tb_pelamar berdasarkan nomor telfon yang di input
    function search_pelamar ($notelp){
        $query = $this->db->query("SELECT * FROM tb_pelamar where nomor_hp_pelamar='$notelp'");
        return $query->result();
    }
    function data_lowongan (){
        $query = $this->db->query("SELECT * FROM tb_lowongan where masa_berlaku >= curdate()");
        return $query->result();
    }
    
    //Untuk insert data ke dalam database
    function select_pendaftar() {
        $query = $this->db->query("SELECT * FROM tb_pendaftar_lowongan p JOIN tb_pelamar pl ON p.id_pelamar = pl.id_pelamar
                JOIN tb_lowongan l ON p.id_lowongan = l.id_lowongan");
        return $query->result();
    }
}
