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

    function proses_insert_lowongan() {
        /*      insert into tb_lowongan
          (id_perusahaan, tanggal_kontrak, permintaan_lowongan, nominal_upah, id_pekerjaan, id_seleksi)
          values
          (?,?,?,?,?,?,?)
          insert into tb_seleksi
          (id_seleksi, tanggal_seleksi, lokasi_seleksi)
          values
          (?,?,?,?,?)
         */
        if ($this->input->post('jalur_penerimaan') == "S") {
            $id_seleksi = $this->Lowongan_m->id_seleksi();
            $data_seleksi = array(
                'id_seleksi' => $id_seleksi,
                'tanggal_seleksi' => $this->input->post('tanggal_seleksi'),
                'lokasi_seleksi' => $this->input->post('lokasi_seleksi'),
            );
            $this->Lowongan_m->insert_seleksi($data_seleksi);
        } else {
            $id_seleksi = "";
        }

        $data = array(
//            'nama kolom di dalam database' => 'inputan form user',
            'tanggal_kontrak' => $this->input->post('tanggal_kontrak'),
            'id_perusahaan' => $this->input->post('nama_perusahaan'),
            'id_pekerjaan' => $this->input->post('pekerjaan'),
            'permintaan_lowongan' => $this->input->post('permintaan_lowongan'),
            'nominal_upah' => $this->input->post('nominal_upah'),
            'id_seleksi' => $id_seleksi
        );
        $this->Lowongan_m->insert_lowongan($data);

        redirect('Lowongan/data_lowongan');
    }

//CODING UNTUK HAPUS DATA
    function hapus_data_lowongan($id_lowongan) {
        $this->Lowongan_m->hapus_lowongan($id_lowongan);
        redirect('Lowongan/data_lowongan');
    }
    
    
    function data_lowongan(){
        $data['data_lowongan'] = $this->Lowongan_m->select_lowongan();
        $this->load->view('crud/lowongan_data',$data);
    }
    
    function data_lowongan_noseleksi(){
        $data['data_lowongan'] = $this->Lowongan_m->select_lowongan_no_seleksi();
        $this->load->view('crud/lowongan_data',$data);
    }

}
