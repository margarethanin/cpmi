<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Berkas_Dasar
 *
 * @author Margarethanin
 */
class Berkas_Dasar extends CI_Controller {
    //put your code here
    function form_insert_berkas_dasar() {
        $this->load->view('crud/berkas_dasar_form_insert');
    }
    function data_berkas_dasar() {
        $this->load->view('crud/berkas_dasar_data');
    }
    
}
