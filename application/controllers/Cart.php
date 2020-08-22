<?php

class Cart extends CI_Controller
{
    public function index()
    {

        $this->load->view('template/header');
        $this->load->view('cart/index');
        $this->load->view('template/footer');
    }
}
