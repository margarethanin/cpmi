<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Endorsement
 *
 * @author Margarethanin
 */
class Endorsement extends CI_Controller {

    //put your code here
    function data_lowongan() {
        $data['lowongan'] = $this->Pendaftar_m->data_lowongan();
        $this->load->view('Endorsement/data_lowongan', $data);
    }

    function data_cpmi_hired($id_lowongan) {
        $data['id_lowongan'] = $id_lowongan;
        $data['cpmi'] = $this->Endorsement_m->data_hired($id_lowongan);
        $this->load->view('Endorsement/data_cpmi_hired', $data);
    }

    function data_cpmi_hired_excel($id_lowongan) {
        $data['cpmi'] = $this->Endorsement_m->data_hired($id_lowongan);
        $this->load->view('Endorsement/data_cpmi_hired_excel', $data);
    }

    //////////////////MODAL UNTUK POP UP/////////////////
    function proses_insert_visa() {
        $id_pendaftar = $this->input->post('id_pendaftar');
        $id_lowongan = $this->input->post('id_lowongan');
        $data = array(
//          'nama kolom di dalam database' => 'inputan form user',
            'id_pendaftar' => $id_pendaftar,
            'nomor_calling_visa' => $this->input->post('visa'),
        );
        $this->Endorsement_m->insert_endorsement($data);
        redirect("Endorsement/data_cpmi_hired/$id_lowongan");
    }

    ////>>>>>>PENGIRIMAN ENDORSEMENT
    function data_pengiriman($id_pengiriman) {
        $data['lowongan'] = $this->Pendaftar_m->data_lowongan();
        $data['id_pengiriman'] = $id_pengiriman;
        $this->load->view('Endorsement/pengiriman_data', $data);
    }

    //untuk insert pengiriman endorsement
    function proses_insert_pengiriman($id_pengiriman) {
        $tgl = $this->input->post('tanggal_pengiriman');
        $id_pengiriman = $this->Endorsement_m->id_pengiriman($tgl);
        $data = array(
            'id_pengiriman' => $id_pengiriman,
//            'nama kolom di dalam database' => 'inputan form user',
            'tanggal_endorsement' => $tgl,
            'pengiriman_dokumen' => $this->input->post('ket_pengiriman'),
        );
        $this->Endorsement_m->insert_pengiriman($data);
        redirect("Endorsement/data_pengiriman/$id_pengiriman");
    }

    function pengiriman() {
        $data['lowongan'] = $this->Pendaftar_m->data_lowongan();
        $this->load->view('Endorsement/pengiriman_form_detail', $data);
    }

    //Tabel Excel Turun Visa
    function simpan_lowongan() {
        $id_lowongan = $this->input->post('id_lowongan[]');
        $id_pengiriman = $this->input->post('id_pengiriman');
        foreach ($id_lowongan as $d) {
            $data = array(
                'id_pengiriman' => $id_pengiriman
            );
            $this->Endorsement_m->update_endorsement($data);
        }
        redirect("Endorsement/data_pengiriman_e/$id_pengiriman");
    }
    function data_pengiriman_e(){
        $data['data'] = $this->Endorsement_m->data_pengiriman_e($id_pengiriman);
        $this->load->view('endorsement/data_pengiriman_e', $data);
    }
   
}
