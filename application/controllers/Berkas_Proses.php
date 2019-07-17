<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Berkas_Proses
 *
 * @author Margarethanin
 */
class Berkas_Proses extends CI_Controller {
    //put your code here
    function form_insert_berkas_proses() {
        $this->load->view('crud/berkas_proses_form_insert');
    }
    function data_berkas_proses() {
        $this->load->view('crud/berkas_proses_data');
    }
    
}
