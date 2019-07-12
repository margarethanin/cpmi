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
class Lowongan extends CI_Controller{
    //put your code here
    function form_insert_lowongan(){
        $this->load->view('crud/lowongan_form_insert');
    }
    function data_lowongan(){
        $this->load->view('crud/lowongan_data');
    }
}
