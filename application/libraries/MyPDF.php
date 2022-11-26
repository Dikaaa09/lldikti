<?php

Class MyPDF{
    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
        include_once APPPATH.'/third_party/fpdf/fpdf.php';
    }
}