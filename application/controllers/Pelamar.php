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
class Pelamar extends CI_Controller{
    //put your code here
    function form_insert_pelamar(){
        $this->load->view('crud/pelamar_form_insert');
    }
    function data_pelamar(){
        $this->load->view('crud/pelamar_data');
    }
}