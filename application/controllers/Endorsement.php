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
class Endorsement extends CI_Controller{
    //put your code here
    function data_lowongan(){
        $data['lowongan'] = $this->Pendaftar_m->data_lowongan();
        $this->load->view('Endorsement/data_lowongan', $data);
    }
    function data_cpmi_hired($id_lowongan){
        $data['id_lowongan'] = $id_lowongan;
        $data['cpmi'] = $this->Endorsement_m->data_hired($id_lowongan);
        $this->load->view('Endorsement/data_cpmi_hired', $data);
    }
    function data_cpmi_hired_excel($id_lowongan){
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
    function data_pengiriman(){
        $data['lowongan'] = $this->Pendaftar_m->data_lowongan();
        $this->load->view('Endorsement/pengiriman_data', $data);
    }
    
}
