<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Berkas
 *
 * @author Margarethanin
 */
class Berkas extends CI_Controller {

    //put your code here
    function form_insert_berkas_proses() {
        $this->load->view('berkas/berkas_proses_form_insert');
    }

    function data_berkas_proses() {
        $this->load->view('berkas/berkas_proses_data');
    }

    function form_insert_berkas_dasar() {
        $this->load->view('berkas/berkas_dasar_form_insert');
    }

    function data_berkas_dasar() {
        $this->load->view('berkas/berkas_dasar_data');
    }

    function update_berkas_dasar($id_pelamar, $berkas) {
        $data['id_pelamar'] = $id_pelamar;
        $data['berkas'] = $berkas;
        $this->load->view('pelamar/update_berkas', $data);
    }

    function proses_update_berkas() {
        $tipe_berkas = $this->input->post('tipe_berkas');
        $id_pelamar = $this->input->post('id_pelamar');

        $config['upload_path'] = "./assets/berkas_pelamar/"; //tempat menyimpan file
        $config['allowed_types'] = 'jpg|png';
        $config['file_name'] = $id_pelamar . '-' . $tipe_berkas;
        $this->upload->initialize($config);

        //upload
        if ($this->upload->do_upload($tipe_berkas)) {
            $foto = $this->upload->data();

        //update database
            $data = array(
                "$tipe_berkas" => $foto['file_name']
            );
        //query
        $this->Berkas_m->update_berkas_dasar_db($data, $id_pelamar);
        redirect("Pelamar/detail_pelamar/$id_pelamar");
        } else {
            $error = array ('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
    }

}
