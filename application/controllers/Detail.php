<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_detail', 'm_detail');
    }

    public function view($id)
    {
        $data = array(
            'detail' => $this->m_detail->find($id),
            'harga' => $this->db->select('*')->from('tbl_produk a')->join('tbl_produk_harga b', 'a.id = b.id_prod', 'left')->where(['a.id' => $id])->get(),
            'foto' => $this->db->select('*')->from('tbl_produk a')->join('tbl_produk_foto b', 'a.id = b.id_produk', 'left')->where(['a.id' => $id])->get()
        );

        // var_dump($data); exit;

        $this->load->view('mockup/layout/core/header');
        $this->load->view('mockup/layout/core/css');
        $this->load->view('mockup/layout/core/topbar');
        $this->load->view('detail', $data);
        $this->load->view('mockup/layout/core/footer');
    }
}
