<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(6, 0);
        $data['data'] = $this->db->get('all_produk');

        $this->load->view('template/header');
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');
    }
}
