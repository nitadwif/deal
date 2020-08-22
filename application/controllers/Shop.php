<?php

class Shop extends CI_Controller
{
    public function index($jenis = "")
    {
        $data['judul'] = 'Shop';
        if ($jenis != '')
            $this->db->where(array('jenis' => $jenis));
        $search = $this->input->get('search');
        if ($search != '')
            $this->db->like(array('name' => $search));

        $data['data'] = $this->db->get('all_produk');
        $this->load->view('template/header');
        $this->load->view('shop/index', $data);
        $this->load->view('template/footer');
    }
    public function detail($id)
    {
        if ($id != '')
            $this->db->where(array('id' => $id));

        $data['detail'] = $this->db->get('all_produk')->row();

        $this->load->view('template/header');
        $this->load->view('shop/detail', $data);
        $this->load->view('template/footer');
    }
}
