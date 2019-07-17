<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pelamar
 *
 * @author Margarethanin
 */
class Pelamar extends CI_Controller {

    //put your code here
    function form_insert_pelamar() {
        $this->load->view('crud/pelamar_form_insert');
    }

    function detail_pelamar() {
//  bisa pake =  $data['data_admin'] = $this->Admin_m->select_admin();
//               $this->load->view('crud/admin_data' , $data);
        
        $this->load->view('crud/pelamar_detail');
    }
    
    function proses_insert_pelamar() {
        $data = array(
//          'nama kolom di dalam database' => 'inputan form user',
            'nama_pelamar' => $this->input->post('pelamar'),
            'tempat_lahir_pelamar' => $this->input->post('tempat_lahir'),
            'tanggal_lahir_pelamar' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),
            'nomor_hp_pelamar' => $this->input->post('nomor_hp'),
            'nama_orang_tua' => $this->input->post('orang_tua'),
            'alamat_pelamar' => $this->input->post('alamat_pelamar'),
            'kode_pos' => $this->input->post('kode_pos'),
            'pendidikan_terakhir_pelamar' => $this->input->post('pendidikan'),
            'status_diri' => $this->input->post('status'),
            'nama_keluarga_lain' => $this->input->post('keluarga'),
            'umur_keluarga_lain' => $this->input->post('umur_keluarga'),
            'hubungan_keluarga_lain' => $this->input->post('hubungan_keluarga'),
            'alamat_keluarga_lain' => $this->input->post('alamat_keluarga'),
            'nomor_hp_keluarga_lain' => $this->input->post('nomor_hp_keluarga'),
            'minat_bekerja' => $this->input->post('minat_bekerja'),
            'minat_lokasi_kerja' => $this->input->post('minat_lokasi'),
        );
        $this->Pelamar_m->insert_pelamar($data);
        redirect('Pelamar/data_pelamar');
    }
    
        function data_pelamar() {
//  bisa pake =  $data['data_admin'] = $this->Admin_m->select_admin();
//               $this->load->view('crud/admin_data' , $data);
        
        $this->load->view('crud/pelamar_data');
    }
  
//CODING UNTUK HAPUS DATA PELAMAR
    function hapus_data_pelamar($id_pelamar) {
        $this->Pelamar_m->hapus_pelamar($id_pelamar);
        redirect('Pelamar/data_pelamar');
    }
    
//CODING UNTUK HAPUS DETAIL PELAMAR
    function hapus_detail_pelamar($id_pelamar) {
        $this->Pelamar_m->hapus_pelamar($id_pelamar);
        redirect('Pelamar/detail_pelamar');
    }
    
//CODING UNTUK EDIT DATA    
    function form_edit_pelamar($id_pelamar){
        $data['detail_pelamar'] = $this->Pelamar_m->select_id_pelamar($id_pelamar);
        $this->load->view('crud/pelamar_form_edit' , $data);
    }
    
    function proses_edit_pelamar(){
        $id_pelamar = $this->input->post('id_pelamar');
        
        $data = array(
            'nama_pelamar' => $this->input->post('pelamar'),
            'tempat_lahir_pelamar' => $this->input->post('tempat_lahir'),
            'tanggal_lahir_pelamar' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),
            'nomor_hp_pelamar' => $this->input->post('nomor_hp'),
            'nama_orang_tua' => $this->input->post('orang_tua'),
            'alamat_pelamar' => $this->input->post('alamat_pelamar'),
            'kode_pos' => $this->input->post('kode_pos'),
            'pendidikan_terakhir_pelamar' => $this->input->post('pendidikan'),
            'status_diri' => $this->input->post('status'),
            'nama_keluarga_lain' => $this->input->post('keluarga'),
            'umur_keluarga_lain' => $this->input->post('umur_keluarga'),
            'hubungan_keluarga_lain' => $this->input->post('hubungan_keluarga'),
            'alamat_keluarga_lain' => $this->input->post('alamat_keluarga'),
            'nomor_hp_keluarga_lain' => $this->input->post('nomor_hp_keluarga'),
            'minat_bekerja' => $this->input->post('minat_bekerja'),
            'minat_lokasi_kerja' => $this->input->post('minat_lokasi'),
        );
        $this->Pelamar_m->update_id_pelamar($data, $id_pelamar);
        redirect('Pelamar/detail_pelamar');
    }

}
