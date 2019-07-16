<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Seleksi
 *
 * @author Margarethanin
 */
class Seleksi extends CI_Controller{
    //put your code here
    function data_seleksi(){
        $this->load->view('crud/seleksi_data');
    }
}
