<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lowongan_m
 *
 * @author Margarethanin
 */
class Lowongan_m extends CI_Model {
    //put your code here
    function insert_lowongan ($data){
        $this->db->insert('tb_lowongan', $data);
    }
    function select_lowongan (){
        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan p ON l.id_perusahaan = p.id_perusahaan 
                JOIN tb_lokasi_perusahaan lp ON p.id_lokasi = lp.id_lokasi
                JOIN tb_pekerjaan pk ON l.id_pekerjaan = pk.id_pekerjaan");
        return $query->result();
    }
//Untuk insert data
 
//CODING UNTUK HAPUS DATA
    function hapus_lowongan($id_lowongan){
        //delete from tb_admin where id_admin = '$id_perusahaan'
        $this->db->where('id_lowongan',$id_lowongan);
        $this->db->delete('tb_lowongan');
    }
    
//CODING untuk colabs antara jalur penerimaan dengan id_seleksi
//    jadi kalo mau input di tb_lowongan, udah otomatis ngisi tb_seleksi juga
//    function id_seleksi($tanggal_seleksi, $id_perusahaan,$id_lokasi){
////       urutan pembuatan kodenya => tanggalhariininourut-
//        
//    }
}
