<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Endorsement_m
 *
 * @author Margarethanin
 */
class Endorsement_m extends CI_Model {
    //put your code here

    function data_hired($id_lowongan) {
        //menampilkan data dari tb_pendaftar_lowongan yang id_lowongan=$id_lowongan dan status=HIRED
        $query = $this->db->query("SELECT * FROM tb_pendaftar_lowongan pl JOIN tb_pelamar p ON pl.id_pelamar=p.id_pelamar JOIN tb_berkas_proses bp ON p.id_pelamar=bp.id_pelamar where id_lowongan='$id_lowongan' and status_penerimaan='HIRED'");
        return $query->result();
    }

}
