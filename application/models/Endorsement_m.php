<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Endorsement_m
 *
 * @author Margarethanin
 */
class Endorsement_m extends CI_Model{
    //put your code here
    function data_lowongan(){
        //menampilkan data lowongan
    }
    function data_hired(){
        //menampilkan data dari tb_pendaftar_lowongan yang id_lowongan=$id_lowongan dan status=HIRED
    }
}
