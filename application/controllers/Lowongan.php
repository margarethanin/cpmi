<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lowongan
 *
 * @author Margarethanin
 */
class Lowongan extends CI_Controller {

    //put your code here
    function form_insert_lowongan() {
        
        $data['perusahaan'] = $this->Perusahaan_m->select_perusahaan_lowongan();
        $data['pekerjaan'] = $this->Pekerjaan_m->select_pekerjaan();
        $this->load->view('crud/lowongan_form_insert', $data);
    }

    function data_lowongan() {
        $this->load->view('crud/lowongan_data');
    }

    function proses_insert_lowongan() {
        $data = array(
//            'nama kolom di dalam database' => 'inputan form user',
            'tanggal_kontrak' => $this->input->post('tanggal_kontrak'),
            'id_perusahaan' => $this->input->post('nama_perusahaan'),
            'id_pekerjaan' => $this->input->post('pekerjaan'),
            'permintaan_lowongan' => $this->input->post('permintaan_lowongan'),
            'nominal_upah' => $this->input->post('nominal_upah'),
            
        );
        $this->Lowongan_m->insert_lowongan($data);
        redirect('Lowongan/data_lowongan');
    }

//CODING UNTUK HAPUS DATA
    function hapus_data_lowongan($id_lowongan) {
        $this->Lowongan_m->hapus_lowongan($id_lowongan);
        redirect('Lowongan/data_lowongan');
    }

}
