<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$content = 'admin/kategori';
		$data['list'] = $this->db->get('tbl_produk_kategori');

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($content, $data);
	}

	public function add()
	{
		$data = ['nm_desc' => input('kategori')];
		$this->db->insert('tbl_produk_kategori', $data);

		echo json_encode(['status' => true]);
		exit;
	}

	public function edit($id)
	{
		$data = $this->db->get_where('tbl_produk_kategori', ['id_desc' => $id])->row_array();
		echo json_encode($data);
		exit;
	}

	public function update()
	{
		$data = ['nm_desc' => input('kategori')];
		$this->db->update('tbl_produk_kategori', $data, ['id_desc' => input('id_kategori')]);

		echo json_encode(['status' => true]);
		exit;
	}

	public function delete($id)
	{
		$this->db->delete('tbl_produk_kategori', ['id_desc' => $id]);
		echo json_encode(['status' => true]);
		exit;
	}
}
