<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pengiriman_Endorsement
 *
 * @author Margarethanin
 */
class Pengiriman_Endorsement extends CI_Controller {

    //put your code here
    function form_insert_pengiriman_endorsement() {
        $this->load->view('crud/pengiriman_endorsement_form_insert');
    }

    function data_pengiriman_endorsement() {
        $this->load->view('crud/pengiriman_endorsement_data');
    }

    function proses_insert_pengiriman_endorsement() {
        $data = array(
//            'nama kolom di dalam database' => 'inputan form user',
            'tanggal_endorsement' => $this->input->post('tanggal_endorsement'),
            'pengiriman_dokumen' => $this->input->post('pengiriman_dokumen'),
        );
        $this->Pengiriman_Endorsement_m->insert_Pengiriman_Endorsement($data);
//        redirect('Pengiriman_Endorsement/data_pengiriman_endorsement');
    }

}
