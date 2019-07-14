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
    
//Untuk insert data
    function insert_lowongan($data) {
        $this->db->insert('tb_lowongan', $data);
    }

//Untuk insert data ke dalam database seleksi
    function insert_seleksi($data) {
        $this->db->insert('tb_seleksi', $data);
    }
    
//Untuk insert data ke dalam database
    function select_lowongan() {
        $query = $this->db->query("SELECT * FROM tb_lowongan l JOIN tb_perusahaan p ON l.id_perusahaan = p.id_perusahaan 
                JOIN tb_lokasi_perusahaan lp ON p.id_lokasi = lp.id_lokasi
                JOIN tb_pekerjaan pk ON l.id_pekerjaan = pk.id_pekerjaan");
        return $query->result();
    }

//CODING UNTUK HAPUS DATA
    function hapus_lowongan($id_lowongan) {
        //delete from tb_admin where id_admin = '$id_perusahaan'
        $this->db->where('id_lowongan', $id_lowongan);
        $this->db->delete('tb_lowongan');
    }

//CODING untuk colabs antara jalur penerimaan di tb_lowongan dengan id_seleksi
//    jadi kalo mau input di tb_lowongan, udah otomatis ngisi tb_seleksi juga
    function id_seleksi($tanggal_seleksi, $id_perusahaan, $id_lokasi) {
//       urutan pembuatan kodenya => tanggalhariininourut-
        $q = $this->db->query("SELECT MAX(RIGHT(id_seleksi,4)) AS kd_max FROM tb_seleksi WHERE DATE(tgl_post)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        return date('ymd') . $kd;
    }

}
