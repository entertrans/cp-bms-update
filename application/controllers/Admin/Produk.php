<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk', 'm_produk');
	}

	public function index()
	{
		$content = 'admin/produk';

		$data['produk'] = $this->m_produk->get();

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($content, $data);
	}

	public function get_foto($id)
	{
		$data = $this->db->get_where('tbl_produk_foto', ['id_produk' => $id])->result_array();
		echo json_encode($data);
		exit;
	}

	public function delete($id)
	{
		$this->m_produk->delete($id);
		echo json_encode(['status' => true]);
		exit;
	}

	public function add()
	{
		$data = array(
			'nm_produk' => input('nm_produk'),
			'deskripsi' => input('deskripsi'),
			'id_prod_kategori' => input('kategori')
		);
		$this->m_produk->add($data);
		echo json_encode(['status' => true]);
		exit;
	}

	public function edit($id)
	{
		$data = $this->m_produk->find($id);
		echo json_encode($data);
		exit;
	}

	public function update()
	{
		$where = ['id' => input('id_produk')];
		$data = array(
			'nm_produk' => input('nm_produk'),
			'deskripsi' => input('deskripsi'),
			'id_prod_kategori' => input('kategori')
		);
		$this->m_produk->update($data, $where);
		echo json_encode(['status' => true]);
		exit;
	}


	public function media($id)
	{
		$content = 'admin/media';

		$data['produk'] = $this->m_produk->find($id);

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($content, $data);
	}

	public function harga($id)
	{
		$content = 'admin/harga';

		$data['produk'] = $this->m_produk->find($id);

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($content, $data);
	}

	public function simpan_harga()
	{
		$data = array(
			'id_prod' => input('id_prod'),
			'satuan' => input('satuan_produk'),
			'harga' => input('harga_produk')
		);
		$this->db->insert('tbl_produk_harga', $data);
		echo json_encode(['status' => true]);
		exit;
	}
}
