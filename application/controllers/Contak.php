<?php

class Contak extends CI_Controller
{
    public function index()
    {

        $this->load->view('template/header');
        $this->load->view('contak/index');
        $this->load->view('template/footer');
    }
}
